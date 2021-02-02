<?php
 
class Ledger extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ledger_model');
    } 

    /*
     * Listing of ledgers
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('ledger/index?');
        $config['total_rows'] = $this->Ledger_model->get_all_ledgers_count();
        $this->pagination->initialize($config);

        $data['ledgers'] = $this->Ledger_model->get_all_ledgers($params);
        
        $data['_view'] = 'ledger/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new ledger
     */
    function add()
    {   
        $this->load->library('form_validation');

        $this->form_validation->set_rules('LedgerName','Ledger Name','required');

        if($this->form_validation->run())     
        {   
            $params = array(
                'LedgerIsGroup' => $this->input->post('LedgerIsGroup'),
                'LedgerParent' => $this->input->post('LedgerParent'),
                'LedgerGroup' => $this->input->post('LedgerGroup'),
                'LedgerCode' => $this->input->post('LedgerCode'),
                'LedgerName' => $this->input->post('LedgerName'),
                'LedgerDesc' => $this->input->post('LedgerDesc'),
                'LedgerSeqNo' => $this->input->post('LedgerSeqNo'),
            );
            
            $ledger_id = $this->Ledger_model->add_ledger($params);
            redirect('ledger/index');
        }
        else
        {	
            $data['all_ledgers'] = $this->Ledger_model->get_all_ledgers_groups();
            
            $data['_view'] = 'ledger/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a ledger
     */
    function edit($idledgers)
    {   
        // check if the ledger exists before trying to edit it
        $data['ledger'] = $this->Ledger_model->get_ledger($idledgers);
        
        if(isset($data['ledger']['idledgers']))
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('LedgerName','Ledger Name','required');
            if($this->form_validation->run())     
            {   
                $params = array(
                    'LedgerIsGroup' => $this->input->post('LedgerIsGroup'),
                    'LedgerParent' => $this->input->post('LedgerParent'),
                    'LedgerGroup' => $this->input->post('LedgerGroup'),
                    'LedgerCode' => $this->input->post('LedgerCode'),
                    'LedgerName' => $this->input->post('LedgerName'),
                    'LedgerDesc' => $this->input->post('LedgerDesc'),
                    'LedgerSeqNo' => $this->input->post('LedgerSeqNo'),
                );

                $this->Ledger_model->update_ledger($idledgers,$params);            
                redirect('ledger/index');
            }
            else
            {				
                $data['all_ledgers'] = $this->Ledger_model->get_all_ledgers_groups();
                
                $data['_view'] = 'ledger/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The ledger you are trying to edit does not exist.');
    } 

    /*
     * Deleting ledger
     */
    function remove($idledgers)
    {
        $ledger = $this->Ledger_model->get_ledger($idledgers);

        // check if the ledger exists before trying to delete it
        if(isset($ledger['idledgers']))
        {
            $this->Ledger_model->delete_ledger($idledgers);
            redirect('ledger/index');
        }
        else
            show_error('The ledger you are trying to delete does not exist.');
    }
    
    
    /*
     * Adding a new ledger
     */
    function roles_list()
    {   
        $this->load->library('form_validation');

        $this->form_validation->set_rules('LedgerName','Role Name','required');

        if($this->form_validation->run())     
        {   
            $params = array(
                'LedgerIsGroup' => 0,
                'LedgerParent' => 0,
                'LedgerGroup' => LED_ROLE,
                'LedgerCode' => $this->input->post('LedgerName'),
                'LedgerName' => $this->input->post('LedgerName'),
                'LedgerDesc' => $this->input->post('LedgerDesc'),
                'LedgerSeqNo' => '',
            );
            
            $ledger_id = $this->Ledger_model->add_ledger($params);
            redirect('roles-list');
        }
        else
        {	
            $data['all_roles'] = $this->Ledger_model->get_ledgers_bygroup(LED_ROLE);            
            
            $data['_view'] = 'ledger/roles_list';
            $this->load->view('layouts/main',$data);
        }
    }      

    function manage_roles($role_en)
    {   
        $role = $this->uricryption->decode($role_en);
        $this->load->model('Role_has_menu_model');
        $data['role'] = $this->Ledger_model->get_ledger($role);
        
        if(isset($data['role']['idledgers']))
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('RHMs_IdMenu','Menu','required');
    
            if($this->form_validation->run())     
            {
            $params = array(
                'RHMs_IdRole'=> $role,
                'RHMs_IdMenu' => $this->input->post('RHMs_IdMenu'),
                'RHMs_Seq' => 0,
                'RHMs_Permission' =>'',
                'RHMs_Level' => 0,
                'RHMs_Parrent' => $this->input->post('RHMs_IdMenu'),
                'RHMs_Refer' => '',
            );
            
            $role_has_menu_id = $this->Role_has_menu_model->add_role_has_menu($params);
            redirect('roles-manage/'.$role_en);
        }
        else
        {

            $data['role_has_menus'] = $this->Role_has_menu_model->get_role_has_menus($role);

            $this->load->model('Menu_model');
            $data['all_menus'] = $this->Menu_model->get_menus_order();
            
            $data['idrole'] = $role;
            
            $data['_view'] = 'ledger/manage_roles';
            $this->load->view('layouts/main',$data);
        }}else{
            redirect('roles-list');
        }
    }      

    function all_users()
    {
        $this->load->model('Login_model');
        $data['logins'] = $this->Login_model->get_logins_with_groups();
        
        $data['_view'] = 'ledger/all_users';
        $this->load->view('layouts/main',$data);
    }

    function manage_user_roles($idlogin_en)
    {
       $idlogin = $this->uricryption->decode($idlogin_en);
       $data['LedgerDetails'] = $this->Ledger_model->get_ledger($idlogin);
       $this->load->library('form_validation');
       $this->form_validation->set_rules('LHRs_IdRole','Role','required');
       if($this->form_validation->run())     
       {   
           $params = array(
               'LHRs_IdLogin' => $idlogin,
               'LHRs_IdRole' => $this->input->post('LHRs_IdRole'),               
               'LHRs_Active' => 1,
               'LHRs_From' => $this->input->post('LHRs_From'),
               'LHRs_To' => $this->input->post('LHRs_To'),
           );
           
           $this->load->model('Login_has_role_model');
           $login_has_role_id = $this->Login_has_role_model->add_login_has_role($params);
           redirect('manage-user-roles/'.$idlogin_en);
       }
       else
       {     
           $data['idlogin'] = $idlogin;
           $data['ledger_roles'] = $this->Ledger_model->get_ledgers_bygroup(LED_ROLE);

           $this->load->model('Login_has_role_model');
           $data['login_has_roles'] = $this->Login_has_role_model->get_login_has_roles($idlogin);       

           $data['_view'] = 'ledger/manage_user_roles';
           $this->load->view('layouts/main',$data);
       } 
    }
    //delete login has role
    function login_has_role_delete($idmenu_en,$idlogin_en)
    {
         $idmenu = $this->uricryption->decode($idmenu_en);
         $idlogin = $this->uricryption->decode($idlogin_en);
         
         $this->load->model('Login_has_role_model');
         $login_has_menu = $this-> Login_has_role_model ->delete_login_has_role($idmenu,$idlogin);
        
        // check if the login_has_menu exists before trying to delete it
        if(isset($login_has_menu['$LHRs_IdLogin']))
        {
            $this->Login_has_role_model->delete_login_has_role($idmenu,$idlogin);
            redirect('manage-user-roles/'.$idlogin);
        }
        else
            show_error('The login_has_menu you are trying to delete does not exist.');
    }
         
    

    /*
     * Deleting role_has_menu
     */
    function role_menu_delete($idmenu_en,$idrole_en)
    {
        echo $idmenu = $this->uricryption->decode($idmenu_en);
        echo $idrole = $this->uricryption->decode($idrole_en);   
        
        $this->load->model('Role_has_menu_model');
        $role_has_menu = $this->Role_has_menu_model->get_role_has_menu($idmenu,$idrole);

        // check if the role_has_menu exists before trying to delete it
        if(isset($role_has_menu['RHMs_IdRole']))
        {
            $this->Role_has_menu_model->delete_role_has_menu($idmenu,$idrole);
            redirect('roles-manage/'.$idrole_en);
        }
        else
            show_error('The role_has_menu you are trying to delete does not exist.');
    }
    
    function fee_head()
    {
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('LedgerName','ledger Name','required');

        if($this->form_validation->run())     
        {   
            $param=array(
//                'LedgerCode'=>  $this->input->post('LedgerCode'),
                'LedgerName'=>  $this->input->post('LedgerName'),
                'LedgerGroup'=>LED_FEE_HEADS,
                );
//                print_r($param);
            $this->Ledger_model->add_fee_head($param);
            redirect('fee-head');
        }
        else
        {
            $data['FH']=  $this->Ledger_model->show_fee_head();
            $data['_view'] = 'ledger/fee_head';
            $this->load->view('layouts/main',$data);
        }
    }
    
    
   function fee_head_edit($idledgers_en)
    {
       $idledgers=  $this->uricryption->decode($idledgers_en);
       $this->load->library('form_validation');
        $this->form_validation->set_rules('LedgerName','ledger Name','required');

        if($this->form_validation->run())     
        {   
            $param=array(
//              'LedgerCode'=>  $this->input->post('LedgerCode'),
                'LedgerName'=>  $this->input->post('LedgerName'),
                'LedgerGroup'=>LED_FEE_HEADS,
                );
//                print_r($param);
            $this->Ledger_model->fee_head_edit($idledgers,$param);
            redirect('fee-head');
        }
        else
        {
            $data['FH']=  $this->Ledger_model->show_single_fee_head($idledgers);
            $data['_view'] = 'ledger/fee_head_edit';
            $this->load->view('layouts/main',$data);
            
        }
       
    }
    
    
    function fee_head_delete($idledgers_en)
    {
       $idledgers=  $this->uricryption->decode($idledgers_en);
       $this->db->where('idledgers',$idledgers);
       $this->db->delete('ledgers');
       redirect('fee-head');
    }
}   
