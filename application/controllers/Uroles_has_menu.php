<?php
 
class Uroles_has_menu extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Uroles_has_menu_model');
    } 

    /*
     * Listing of uroles_has_menu
     */
    function index()
    {
        $data['uroles_has_menu'] = $this->Uroles_has_menu_model->get_all_uroles_has_menu();
        
        $data['_view'] = 'uroles_has_menu/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new uroles_has_menu
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'URHM_Active' => $this->input->post('URHM_Active'),
				'URHM_IdMenu' => $this->input->post('URHM_IdMenu'),
				'URHM_Parent' => $this->input->post('URHM_Parent'),
				'URHM_IdRole' => $this->input->post('URHM_IdRole'),
				'URHM_Level' => $this->input->post('URHM_Level'),
				'URHM_Seq' => $this->input->post('URHM_Seq'),
            );
            
            $uroles_has_menu_id = $this->Uroles_has_menu_model->add_uroles_has_menu($params);
            redirect('uroles_has_menu/index');
        }
        else
        {
			$this->load->model('Menu_model');
			$data['all_menus'] = $this->Menu_model->get_all_menus();
			$data['all_menus'] = $this->Menu_model->get_all_menus();
            
            $data['_view'] = 'uroles_has_menu/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a uroles_has_menu
     */
    function edit($iduroles_has_menu)
    {   
        // check if the uroles_has_menu exists before trying to edit it
        $data['uroles_has_menu'] = $this->Uroles_has_menu_model->get_uroles_has_menu($iduroles_has_menu);
        
        if(isset($data['uroles_has_menu']['iduroles_has_menu']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'URHM_Active' => $this->input->post('URHM_Active'),
					'URHM_IdMenu' => $this->input->post('URHM_IdMenu'),
					'URHM_Parent' => $this->input->post('URHM_Parent'),
					'URHM_IdRole' => $this->input->post('URHM_IdRole'),
					'URHM_Level' => $this->input->post('URHM_Level'),
					'URHM_Seq' => $this->input->post('URHM_Seq'),
                );

                $this->Uroles_has_menu_model->update_uroles_has_menu($iduroles_has_menu,$params);            
                redirect('uroles_has_menu/index');
            }
            else
            {
				$this->load->model('Menu_model');
				$data['all_menus'] = $this->Menu_model->get_all_menus();
				$data['all_menus'] = $this->Menu_model->get_all_menus();

                $data['_view'] = 'uroles_has_menu/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The uroles_has_menu you are trying to edit does not exist.');
    } 

    /*
     * Deleting uroles_has_menu
     */
    function remove($iduroles_has_menu)
    {
        $uroles_has_menu = $this->Uroles_has_menu_model->get_uroles_has_menu($iduroles_has_menu);

        // check if the uroles_has_menu exists before trying to delete it
        if(isset($uroles_has_menu['iduroles_has_menu']))
        {
            $this->Uroles_has_menu_model->delete_uroles_has_menu($iduroles_has_menu);
            redirect('uroles_has_menu/index');
        }
        else
            show_error('The uroles_has_menu you are trying to delete does not exist.');
    }
    
}
