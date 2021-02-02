<?php
 
class Role_has_menu extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Role_has_menu_model');
        $this->load->model('Ledger_model');
        $this->load->model('Menu_model');
    } 

    /*
     * Adding a new role_has_menu and Menu Listings
     */
    function add($role_en)
    {   
        $role = $this->uricryption->decode($role_en);
        $data['role'] = $this->Ledger_model->get_ledger($role);
        
        if(isset($data['role']['idledgers']))
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('RHMs_IdMenu','Menu','required');
    
            if($this->form_validation->run())     
            {
                //Transactio Starts
                $this->db->trans_begin();
                $this->db->where('idmenus',$this->input->post('RHMs_IdMenu'));
                $menus = $this->db->get('menus')->row_array();
                
            $params = array(
                'RHMs_IdRole'=> $role,
                'RHMs_IdMenu' => $this->input->post('RHMs_IdMenu'),
                'RHMs_Seq' => 0,
                'RHMs_Permission' =>'',
                'RHMs_Level' => 0,
                'RHMs_Parrent' => $this->input->post('RHMs_IdMenu'),
                'RHMs_Refer' => '',
                'RHMs_MenuType' => $menus['Menu_Type'],
                'RHMs_MenuParent' => $menus['Menu_Parrent'],
                'RHMs_MenuPosition' => $this->input->post('RHMs_MenuPosition'),
            );
            
            $role_has_menu_id = $this->Role_has_menu_model->add_role_has_menu($params);
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
            redirect('roles-has-menu/'.$role_en);
        }
        else
        {

            $data['role_has_menus'] = $this->Role_has_menu_model->get_role_has_menus($role);
//            $data['master_menu'] = $this->db->where($data['role_has_menus']['role_has_menus']);

            $data['all_menus'] = $this->Role_has_menu_model->get_menus_order();
            $data['sub_menus'] = $this->db->get('menus')->result_array();
            
            
            
            $data['menus_type'] = $this->Menu_model->get_menus_type();            
            $data['idrole'] = $role;
            
            $data['_view'] = 'role_has_menu/add';
            $this->load->view('layouts/main',$data);
        }}else{
            redirect('role_has_menu/add');
        }
    }  


    /*
     * Deleting role_has_menu
     */
    
    function role_menu_delete($idmenu_en,$idrole_en)
    {
         $idmenu = $this->uricryption->decode($idmenu_en);
         $idrole = $this->uricryption->decode($idrole_en);   
        
        $role_has_menu = $this->Role_has_menu_model->get_role_has_menu($idmenu,$idrole);

        // check if the role_has_menu exists before trying to delete it
        if(isset($role_has_menu['RHMs_IdRole']))
        {
            $this->Role_has_menu_model->delete_role_has_menu($idmenu,$idrole);
            //  Alert Starts
                $this->session->set_flashdata('color', 'abc("error");');
                $this->session->set_flashdata('msg', 'Menu Deleted Successfully');
            redirect('roles-has-menu/'.$idrole_en);
        }
        else
            show_error('The role_has_menu you are trying to delete does not exist.');
    }
    
}
