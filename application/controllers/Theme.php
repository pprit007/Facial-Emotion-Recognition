<?php
class Theme extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Theme_model');
    } 

    /*
     * Listing of theme
     */
    function index()
    {
        $data['theme'] = $this->Theme_model->get_all_theme();
        
        $data['_view'] = 'theme/index';
        $this->load->view('layouts/main',$data);
    }

    
    /*
     * Editing a theme
     */
    function edit($idtheme)
    {   
        // check if the theme exists before trying to edit it
        $data['theme'] = $this->Theme_model->get_theme($idtheme);
        
        if(isset($data['theme']['idtheme']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('main_nav','Main Nav','required');
			$this->form_validation->set_rules('left_nav','Left Nav','required');
			$this->form_validation->set_rules('project','project','required');
			$this->form_validation->set_rules('submenu','Submenu','required');
			$this->form_validation->set_rules('devsite','Developer Site','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'main_nav' => $this->input->post('main_nav'),
					'project' => $this->input->post('project'),
					'left_nav' => $this->input->post('left_nav'),
					'submenu' => $this->input->post('submenu'),
					'developer' => $this->input->post('developer'),
					'devsite' => $this->input->post('devsite'),
                );
                $this->Theme_model->update_theme($idtheme,$params);    
                if(!empty($_FILES['icon']['name']))
            { 
                // upload contact person files
                $config['upload_path']          = 'interface/';
                $config['allowed_types']        = FILES_ALLOWDED;
                $config['max_size']             = FILES_SIZE;
                //$config['max_width']            = '500';
                //$config['max_height']           = '500';
                $config['encrypt_name'] = TRUE;                
                $data['upload_data'] = '';
                //load the upload library
                $this->load->library('upload', $config);
                //if not successful, set the error message
                $this->upload->initialize($config);
                $this->upload->overwrite = true;

                if (!$this->upload->do_upload('icon')) {
                    $data = array('msg' => $this->upload->display_errors());
                } else {
                    $data['upload_data'] = $this->upload->data();
                    $params = array(
                        'icon' => $data['upload_data']['file_name']
                   );
                    $this->Theme_model->update_theme($idtheme,$params);    
                }
            }
                //  Alert Starts
                $this->session->set_flashdata('color', 'abc("warning");');
                $this->session->set_flashdata('msg', 'Them Edited Successfully');
                redirect('theme/index');
            }
            else
            {
                $data['_view'] = 'theme/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The theme you are trying to edit does not exist.');
    } 

    /*
     * Deleting theme
     */
    function remove($idtheme)
    {
        $theme = $this->Theme_model->get_theme($idtheme);

        // check if the theme exists before trying to delete it
        if(isset($theme['idtheme']))
        {
            $this->Theme_model->delete_theme($idtheme);
            redirect('theme/index');
        }
        else
            show_error('The theme you are trying to delete does not exist.');
    }
    
}
