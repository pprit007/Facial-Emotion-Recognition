<?php
class User_datum extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_datum_model');
    } 

    /*
     * Listing of user_data
     */
    function view($UD_iduser_en)
    {
        $UD_iduser = $this->uricryption->decode($UD_iduser_en);
        $data['user_data'] = $this->User_datum_model->get_all_user_data($UD_iduser);
        
        $data['_view'] = 'user_datum/view';
        $this->load->view('layouts/main',$data);
    }
    
    function user_side()
    {
        $data['user_data'] = $this->User_datum_model->get_all_userside_data();
        
        $data['_view'] = 'user_datum/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new user_datum
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'UD_iduser' => $this->input->post('UD_iduser'),
				'UD_Emotion' => $this->input->post('UD_Emotion'),
				'UD_Date' => $this->input->post('UD_Date'),
            );
            
            $user_datum_id = $this->User_datum_model->add_user_datum($params);
            redirect('user_datum/index');
        }
        else
        {            
            $data['_view'] = 'user_datum/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a user_datum
     */
    function edit($iduser_data)
    {   
        // check if the user_datum exists before trying to edit it
        $data['user_datum'] = $this->User_datum_model->get_user_datum($iduser_data);
        
        if(isset($data['user_datum']['iduser_data']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'UD_iduser' => $this->input->post('UD_iduser'),
					'UD_Emotion' => $this->input->post('UD_Emotion'),
					'UD_Date' => $this->input->post('UD_Date'),
                );

                $this->User_datum_model->update_user_datum($iduser_data,$params);            
                redirect('user_datum/index');
            }
            else
            {
                $data['_view'] = 'user_datum/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user_datum you are trying to edit does not exist.');
    } 

    /*
     * Deleting user_datum
     */
    function remove($iduser_data)
    {
        $user_datum = $this->User_datum_model->get_user_datum($iduser_data);

        // check if the user_datum exists before trying to delete it
        if(isset($user_datum['iduser_data']))
        {
            $this->User_datum_model->delete_user_datum($iduser_data);
            redirect('user_datum/index');
        }
        else
            show_error('The user_datum you are trying to delete does not exist.');
    }
    
}