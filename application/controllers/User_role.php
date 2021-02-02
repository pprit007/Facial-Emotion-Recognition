<?php
 
class User_role extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_role_model');
    } 

    /*
     * Listing of user_roles
     */
    function index()
    {
        $data['user_roles'] = $this->User_role_model->get_all_user_roles();
        
        $data['_view'] = 'user_role/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new user_role
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('URoleTitle','URoleTitle','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'URoleTitle' => $this->input->post('URoleTitle'),
				'URoleGroup' => $this->input->post('URoleGroup'),
				'URoleParent' => $this->input->post('URoleParent'),
            );
            
            $user_role_id = $this->User_role_model->add_user_role($params);
            redirect('user_role/index');
        }
        else
        {            
            $data['_view'] = 'user_role/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a user_role
     */
    function edit($iduser_roles)
    {   
        // check if the user_role exists before trying to edit it
        $data['user_role'] = $this->User_role_model->get_user_role($iduser_roles);
        
        if(isset($data['user_role']['iduser_roles']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('URoleTitle','URoleTitle','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'URoleTitle' => $this->input->post('URoleTitle'),
					'URoleGroup' => $this->input->post('URoleGroup'),
					'URoleParent' => $this->input->post('URoleParent'),
                );

                $this->User_role_model->update_user_role($iduser_roles,$params);            
                redirect('user_role/index');
            }
            else
            {
                $data['_view'] = 'user_role/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user_role you are trying to edit does not exist.');
    } 

    /*
     * Deleting user_role
     */
    function remove($iduser_roles)
    {
        $user_role = $this->User_role_model->get_user_role($iduser_roles);

        // check if the user_role exists before trying to delete it
        if(isset($user_role['iduser_roles']))
        {
            $this->User_role_model->delete_user_role($iduser_roles);
            redirect('user_role/index');
        }
        else
            show_error('The user_role you are trying to delete does not exist.');
    }
    
}
