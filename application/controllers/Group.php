<?php

 
class Group extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Group_model');
    } 

    /*
     * Listing of groups
     */
    function index()
    {
        $data['groups'] = $this->Group_model->get_all_groups();
         $this->load->library('form_validation');

		$this->form_validation->set_rules('Group_Name','Group Name','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'Group_Name' => $this->input->post('Group_Name'),
            );
            
            $group_id = $this->Group_model->add_group($params);
            redirect('group/index');
        }
        else
        {    
        $data['_view'] = 'group/index';
        $this->load->view('layouts/main',$data);
        }
    }

    /*
     * Adding a new group
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('Group_Name','Group Name','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'Group_Name' => $this->input->post('Group_Name'),
            );
            
            $group_id = $this->Group_model->add_group($params);
            redirect('group/index');
        }
        else
        {            
            $data['_view'] = 'group/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a group
     */
    function edit($id_group)
    {   
        // check if the group exists before trying to edit it
        $data['group'] = $this->Group_model->get_group($id_group);
        
        if(isset($data['group']['id_group']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('Group_Name','Group Name','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'Group_Name' => $this->input->post('Group_Name'),
                );

                $this->Group_model->update_group($id_group,$params);            
                redirect('group/index');
            }
            else
            {
                $data['_view'] = 'group/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The group you are trying to edit does not exist.');
    } 

    /*
     * Deleting group
     */
    function remove($id_group_en)
    {
        $id_group = $this->uricryption->decode($id_group_en);
        $group = $this->Group_model->get_group($id_group);

        // check if the group exists before trying to delete it
        if(isset($group['id_group']))
        {
            $this->Group_model->delete_group($id_group);
            redirect('groups');
        }
        else
            show_error('The group you are trying to delete does not exist.');
    }
    
}
