<?php
 
class Role_manager extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Role_manager_model');
        $this->load->model('Role_has_menu_model');
        $this->load->model('Ledger_model');
        $this->load->model('Menu_model');
    } 
 
    /*
     * User Roles
     */
     function all_users()
    {
        $data['logins'] = $this->Role_manager_model->get_logins_with_groups();
        
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
           
           $login_has_role_id = $this->Role_manager_model->add_login_has_role($params);
           //  Alert Starts
                $this->session->set_flashdata('color', 'abc("success");');
                $this->session->set_flashdata('msg', 'Role Added Successfully');
           redirect('manage-user-roles/'.$idlogin_en);
       }
       else
       {     
           $data['idlogin'] = $idlogin;
           $data['ledger_roles'] = $this->Ledger_model->get_ledgers_bygroup(LED_ROLE);

           $data['login_has_roles'] = $this->Role_manager_model->get_login_has_roles($idlogin);       

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
            $this->Role_manager_model->delete_login_has_role($idmenu,$idlogin);
            //  Alert Starts
                $this->session->set_flashdata('color', 'abc("error");');
                $this->session->set_flashdata('msg', 'Role Deleted Successfully');
            redirect('manage-user-roles/'.$idlogin_en);
        }
        else{
            show_error('The login_has_menu you are trying to delete does not exist.');
        }
    }
}
