<?php
 
class Menu extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model');
    } 

    /*
     * Listing of menus
     */
    function index()
    {
        $data['menus'] = $this->Menu_model->get_all_menus_join();
        
        $data['_view'] = 'menu/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new menu
     */
    function add()
    {   
        $this->load->library('form_validation');

        $this->form_validation->set_rules('Menu_Name','Menu Name','required');
        $this->form_validation->set_rules('Menu_link','Menu Link','required');
        $this->form_validation->set_rules('Menu_Type','Menu Type','required');
        $this->form_validation->set_rules('Menu_RouteTo','Menu Route To','required');

        if($this->form_validation->run())     
        {   
            $already_menu = 0;

            //Master Menu Addd 
            if($this->input->post('Menu_link') != '#')
            {
                 $params = array(
                        'Menu_link' => $this->input->post('Menu_link'),
                            );
                $validatemenulink=$this->Menu_model->validate_menu($params);
            if(isset($validatemenulink['Menu_link']))
                {
                    $already_menu = 1;
                }
            }
            //Master Menu Addd And Duplicate Checker


            if($already_menu == 1)
            {
                show_error('The menu you are trying to add already exist.');
            }
            else
            {
                $params = array(
                        'Menu_Type' => $this->input->post('Menu_Type'),                
                        'Menu_RouteTo' => $this->input->post('Menu_RouteTo'),
                        'Menu_IsParent' => $this->input->post('Menu_IsParent'),
                        'Menu_Parrent' => $this->input->post('Menu_Parrent'),
                        'Menu_Icon' => $this->input->post('Menu_Icon'),
                        'Menu_LinkOption' => $this->input->post('Menu_LinkOption'),
                        'Menu_Level' => $this->input->post('Menu_Level'),
                        'Menu_Position' => $this->input->post('Menu_Position'),
                        'Menu_Code' => $this->input->post('Menu_Code'),
                        'Menu_Name' => $this->input->post('Menu_Name'),
                        'Menu_link' => $this->input->post('Menu_link'),
                        'Menu_SubName' => $this->input->post('Menu_SubName'),
                );

                //Transactio Starts
                $this->db->trans_begin();
                $menu_id = $this->Menu_model->add_menu($params);
                if($this->input->post('Menu_Parrent') == '')
                {
                    $params = array(
                        'Menu_Parrent' => $menu_id
                    );
                    $this->Menu_model->update_menu($menu_id,$params);                  
                }

                if ($this->db->trans_status() === FALSE)
                    {
                            $this->db->trans_rollback();
                    }
                    else
                    {
                            $this->db->trans_commit();
                    }
                    //Transactio Ends
                    
                    //  Alert Starts
                $this->session->set_flashdata('color', 'abc("success");');
                $this->session->set_flashdata('msg', 'Menu Added Successfully');
                redirect('menus');
            }
        }
        else
        {
            $data['master_menus'] = $this->Menu_model->get_master_menus(MSM);
            $data['menus_type'] = $this->Menu_model->get_menus_type();
            
            $data['_view'] = 'menu/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a menu
     */
    function edit($idmenus_en)
    {   
        $idmenus = $this->uricryption->decode($idmenus_en);
        // check if the menu exists before trying to edit it
        $data['menu'] = $this->Menu_model->get_menu($idmenus);
        
        if(isset($data['menu']['idmenus']))
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('Menu_Name','Menu Name','required');
            $this->form_validation->set_rules('Menu_link','Menu Link','required');

            if($this->form_validation->run())     
            {   
                $params = array(
                    'Menu_Type' => $this->input->post('Menu_Type'),                
                    'Menu_RouteTo' => $this->input->post('Menu_RouteTo'),
                    'Menu_IsParent' => $this->input->post('Menu_IsParent'),
                    'Menu_Parrent' => $this->input->post('Menu_Parrent'),
                    'Menu_Icon' => $this->input->post('Menu_Icon'),
                    'Menu_LinkOption' => $this->input->post('Menu_LinkOption'),
                    'Menu_Level' => $this->input->post('Menu_Level'),
                    'Menu_Position' => $this->input->post('Menu_Position'),
                    'Menu_Code' => $this->input->post('Menu_Code'),
                    'Menu_Name' => $this->input->post('Menu_Name'),
                    'Menu_link' => $this->input->post('Menu_link')
                );

                 //Transactio Starts
                $this->db->trans_begin();
                $this->Menu_model->update_menu($idmenus,$params);            
                    
                if($this->input->post('Menu_Parrent') == 'NOP')
                {
                    $params = array(
                        'Menu_Parrent' => $idmenus
                    );
                    $this->Menu_model->update_menu($idmenus,$params);                  
                }                
                if ($this->db->trans_status() === FALSE)
                {
                        $this->db->trans_rollback();
                }
                else
                {
                        $this->db->trans_commit();
                }
                //  Alert Starts
                $this->session->set_flashdata('color', 'abc("warning");');
                $this->session->set_flashdata('msg', 'Menu Edited Successfully');
                //Transactio Ends
                redirect('menus');
            }
            else
            {				
                $data['master_menus'] = $this->Menu_model->get_master_menus(MSM);
                $data['menus_type'] = $this->Menu_model->get_menus_type();
                $data['_view'] = 'menu/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The menu you are trying to edit does not exist.');
    } 

    /*
     * Deleting menu
     */
    function remove($idmenus)
    {
        $menu = $this->Menu_model->get_menu($idmenus);

        // check if the menu exists before trying to delete it
        if(isset($menu['idmenus']))
        {
            $this->Menu_model->delete_menu($idmenus);
            //  Alert Starts
                $this->session->set_flashdata('color', 'abc("error");');
                $this->session->set_flashdata('msg', 'Menu Deleted Successfully');
            redirect('menus');
        }
        else
            show_error('The menu you are trying to delete does not exist.');
    }
    
}
