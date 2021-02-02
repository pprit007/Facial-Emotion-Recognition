<?php
 
class User extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('Password_crypt');
    } 

    /*
     * Listing of users
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('user/index?');
        $config['total_rows'] = $this->User_model->get_all_users_count();
        $this->pagination->initialize($config);

        $data['users'] = $this->User_model->get_all_users($params);
        
        $data['_view'] = 'user/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new user
     */
    function add()
    {   
        $this->load->library('form_validation');

        $this->form_validation->set_rules('UserFName','First Name','required');
        $this->form_validation->set_rules('UserLName','Last Name','required');
        $this->form_validation->set_rules('UserPhone1','Phone','required|numeric|exact_length[10]');
        $this->form_validation->set_rules('UserPhone2','Alt. Phone','numeric|exact_length[10]');
        $this->form_validation->set_rules('UserEmail','Email','valid_email');
        $this->form_validation->set_rules('UserFullAddress','Address','required');

        if($this->form_validation->run())     
        {   
            $this->db->trans_start();

            $params = array(
                'LedgerIsGroup' => 0,
                'LedgerParent' => 0,
                'LedgerGroup' => LED_USER_MASTER,
                'LedgerCode' => '',
                'LedgerName' => $this->input->post('UserFName')." ".$this->input->post('UserMName')." ".$this->input->post('UserLName'),
                'LedgerDesc' => 'User Management :Office User',
                'LedgerSeqNo' => '',
            );
            $this->load->model('Ledger_model');
            $ledger_id = $this->Ledger_model->add_ledger($params);
            
            $params = array(
                'Users_IdLedger' => $ledger_id,
                'UserPhoneVerified' => $this->input->post('UserPhoneVerified'),
                'UserActive' => 1,
                'UserFName' => $this->input->post('UserFName'),
                'UserMName' => $this->input->post('UserMName'),
                'UserLName' => $this->input->post('UserLName'),
                'UserPhone1' => $this->input->post('UserPhone1'),
                'UserPhoneVerifiedOnAt' => $this->input->post('UserPhoneVerifiedOnAt'),
                'UserPhone2' => $this->input->post('UserPhone2'),
                'UserEmail' => $this->input->post('UserEmail'),
                'UserEmailVerified' => $this->input->post('UserEmailVerified'),
                'UserEmailVerifiedOnAt' => $this->input->post('UserEmailVerifiedOnAt'),
                'UserCreatedOnAt' => $this->input->post('UserCreatedOnAt'),
                'UserUpdatedOnAt' => $this->input->post('UserUpdatedOnAt'),
                'UserFullAddress' => $this->input->post('UserFullAddress'),
                'Username' => $this->input->post('UserPhone1'),
                'UserPassKey' =>  $this->password_crypt->hash($this->input->post('UserPhone1')),
            );
            $user_id = $this->User_model->add_user($params);

            $params = array(
                'idlogins' => $ledger_id,
				'LoginActive' => 1,
				'LoginUsername' => $this->input->post('UserPhone1'),
				'LoginPassKey' => $this->password_crypt->hash($this->input->post('UserPhone1')),
            );
            $this->load->model('Login_model');
            $login_id = $this->Login_model->add_login($params);
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE)
            {
                $this->db->trans_rollback();
                // Log Message or Display Message
            }
            else
            {
                $this->db->trans_commit();
            }

            redirect('system-users');
        }
        else
        {            
            $data['_view'] = 'user/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a user
     */
    function edit($idusers_en)
    {   
        $idusers = $this->uricryption->decode($idusers_en);
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($idusers);
        
        if(isset($data['user']['idusers']))
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('UserFName','First Name','required');
            $this->form_validation->set_rules('UserLName','Last Name','required');
            $this->form_validation->set_rules('UserPhone1','Phone','required|numeric|exact_length[10]');
            $this->form_validation->set_rules('UserPhone2','Alt. Phone','numeric|exact_length[10]');
            $this->form_validation->set_rules('UserEmail','Email','valid_email');
            
            $this->form_validation->set_rules('UserFullAddress','Address','required');
		
            if($this->form_validation->run())     
            {   
                $params = array(
                    'LedgerName' => $this->input->post('UserFName')." ".$this->input->post('UserMName')." ".$this->input->post('UserLName'),
                );

                $this->load->model('Ledger_model');
                $this->Ledger_model->update_ledger($data['user']['Users_IdLedger'],$params);
                
                
                $params = array(
                    'UserPhoneVerified' => $this->input->post('UserPhoneVerified'),
                    'UserActive' => $this->input->post('UserActive'),
                    'UserFName' => $this->input->post('UserFName'),
                    'UserMName' => $this->input->post('UserMName'),
                    'UserLName' => $this->input->post('UserLName'),
                    'UserPhone1' => $this->input->post('UserPhone1'),
                    'Username' => $this->input->post('UserPhone1'),
                    'UserPhoneVerifiedOnAt' => $this->input->post('UserPhoneVerifiedOnAt'),
                    'UserPhone2' => $this->input->post('UserPhone2'),
                    'UserEmail' => $this->input->post('UserEmail'),
                    'UserEmailVerified' => $this->input->post('UserEmailVerified'),
                    'UserEmailVerifiedOnAt' => $this->input->post('UserEmailVerifiedOnAt'),
                    'UserCreatedOnAt' => $this->input->post('UserCreatedOnAt'),
                    'UserUpdatedOnAt' => $this->input->post('UserUpdatedOnAt'),
                    'UserFullAddress' => $this->input->post('UserFullAddress'),
                    'UserPassKey' =>  $this->password_crypt->hash($this->input->post('UserPhone1')),
                );

                $this->User_model->update_user($idusers,$params);       
                
                $params = array(
					'LoginActive' => $this->input->post('UserActive'),
					'LoginPassKey' => $this->password_crypt->hash($this->input->post('UserPhone1')),
                );
                $this->load->model('Login_model');
                $this->Login_model->update_login($idlogins,$params);            


                redirect('system-users');
            }
            else
            {
                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    } 

    /*
     * Deleting user
     */
    function remove($idusers)
    {
        $user = $this->User_model->get_user($idusers);

        // check if the user exists before trying to delete it
        if(isset($user['idusers']))
        {
            $this->User_model->delete_user($idusers);
            redirect('system-users');
        }
        else
            show_error('The user you are trying to delete does not exist.');
    }
    
    
    /*
     * User has roles_Roles
     */
     function all_users()
    {
        $data['logins'] = $this->Roles_model->get_logins_with_groups();
        
        $data['_view'] = 'role_manager/all_users';
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
           
           $login_has_role_id = $this->Roles_model->add_login_has_role($params);
           redirect('manage-user-roles/'.$idlogin_en);
       }
       else
       {     
           $data['idlogin'] = $idlogin;
           $data['ledger_roles'] = $this->Ledger_model->get_ledgers_bygroup(LED_ROLE);

           $data['login_has_roles'] = $this->Roles_model->get_login_has_roles($idlogin);       

           $data['_view'] = 'role_manager/manage_user_roles';
           $this->load->view('layouts/main',$data);
       } 
    }
    //delete login has role
    function login_has_role_delete($idmenu_en,$idlogin_en)
    {
         $idmenu = $this->uricryption->decode($idmenu_en);
         $idlogin = $this->uricryption->decode($idlogin_en);
//         
         $login_has_menu = $this->db->get_where('login_has_roles',array('LHRs_IdLogin'=>$idlogin))->row_array();
      
        // check if the login_has_menu exists before trying to delete it
        if(isset($login_has_menu['LHRs_IdLogin']))
        {
            $this->Roles_model->delete_login_has_role($idmenu,$idlogin);
            redirect('manage-user-roles/'.$idlogin_en);
        }
        else{
            show_error('The login_has_menu you are trying to delete does not exist.');
        }
    }
    
}
