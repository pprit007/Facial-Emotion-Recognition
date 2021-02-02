<?php
 
class User_has_role extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_has_role_model');
    } 

    /*
     * Listing of user_has_roles
     */
    function index()
    {
        $data['user_has_roles'] = $this->User_has_role_model->get_all_user_has_roles();
        
        $data['_view'] = 'user_has_role/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new user_has_role
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
                'UHRs_Active' => $this->input->post('UHRs_Active'),
                'UHRs_IdRole' => $this->input->post('UHRs_IdRole'),
                'UHRs_IdUser' => $this->input->post('UHRs_IdUser'),
                'UHRs_CreatedOnAt' => $this->input->post('UHRs_CreatedOnAt'),
                'UHRs_UpdatedOnAt' => $this->input->post('UHRs_UpdatedOnAt'),
            );
            
            $user_has_role_id = $this->User_has_role_model->add_user_has_role($params);
            redirect('user_has_role/index');
        }
        else
        {
			$this->load->model('User_role_model');
			$data['all_user_roles'] = $this->User_role_model->get_all_user_roles();
            
            $data['_view'] = 'user_has_role/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a user_has_role
     */
    function edit($iduser_has_roles)
    {   
        // check if the user_has_role exists before trying to edit it
        $data['user_has_role'] = $this->User_has_role_model->get_user_has_role($iduser_has_roles);
        
        if(isset($data['user_has_role']['iduser_has_roles']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'UHRs_Active' => $this->input->post('UHRs_Active'),
					'UHRs_IdRole' => $this->input->post('UHRs_IdRole'),
					'UHRs_IdUser' => $this->input->post('UHRs_IdUser'),
					'UHRs_CreatedOnAt' => $this->input->post('UHRs_CreatedOnAt'),
					'UHRs_UpdatedOnAt' => $this->input->post('UHRs_UpdatedOnAt'),
                );

                $this->User_has_role_model->update_user_has_role($iduser_has_roles,$params);            
                redirect('user_has_role/index');
            }
            else
            {
				$this->load->model('User_role_model');
				$data['all_user_roles'] = $this->User_role_model->get_all_user_roles();

                $data['_view'] = 'user_has_role/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user_has_role you are trying to edit does not exist.');
    } 

    /*
     * Deleting user_has_role
     */
    function remove($iduser_has_roles)
    {
        $user_has_role = $this->User_has_role_model->get_user_has_role($iduser_has_roles);

        // check if the user_has_role exists before trying to delete it
        if(isset($user_has_role['iduser_has_roles']))
        {
            $this->User_has_role_model->delete_user_has_role($iduser_has_roles);
            redirect('user_has_role/index');
        }
        else
            show_error('The user_has_role you are trying to delete does not exist.');
    }
    
}
