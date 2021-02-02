<?php
 
class Login_has_role extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_has_role_model');
    } 

    /*
     * Listing of login_has_roles
     */
    function index()
    {
        $data['login_has_roles'] = $this->Login_has_role_model->get_all_login_has_roles();
        
        $data['_view'] = 'login_has_role/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new login_has_role
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'LHRs_Active' => $this->input->post('LHRs_Active'),
				'LHRs_From' => $this->input->post('LHRs_From'),
				'LHRs_To' => $this->input->post('LHRs_To'),
            );
            
            $login_has_role_id = $this->Login_has_role_model->add_login_has_role($params);
            redirect('login_has_role/index');
        }
        else
        {            
            $data['_view'] = 'login_has_role/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a login_has_role
     */
    function edit($LHRs_IdLogin)
    {   
        // check if the login_has_role exists before trying to edit it
        $data['login_has_role'] = $this->Login_has_role_model->get_login_has_role($LHRs_IdLogin);
        
        if(isset($data['login_has_role']['LHRs_IdLogin']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'LHRs_Active' => $this->input->post('LHRs_Active'),
					'LHRs_From' => $this->input->post('LHRs_From'),
					'LHRs_To' => $this->input->post('LHRs_To'),
                );

                $this->Login_has_role_model->update_login_has_role($LHRs_IdLogin,$params);            
                redirect('login_has_role/index');
            }
            else
            {
                $data['_view'] = 'login_has_role/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The login_has_role you are trying to edit does not exist.');
    } 

    /*
     * Deleting login_has_role
     */
    function remove($LHRs_IdLogin)
    {
        $login_has_role = $this->Login_has_role_model->get_login_has_role($LHRs_IdLogin);

        // check if the login_has_role exists before trying to delete it
        if(isset($login_has_role['LHRs_IdLogin']))
        {
            $this->Login_has_role_model->delete_login_has_role($LHRs_IdLogin);
            redirect('login_has_role/index');
        }
        else
            show_error('The login_has_role you are trying to delete does not exist.');
    }
    
}
