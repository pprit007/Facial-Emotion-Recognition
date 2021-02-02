<?php
 
class Menu_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get menu by idmenus
     */
    function get_menu($idmenus)
    {
        return $this->db->get_where('menus',array('idmenus'=>$idmenus))->row_array();
    }
        
    /*
     * Get all menus
     */
    function get_all_menus()
    {
        $this->db->order_by('idmenus', 'desc');
        return $this->db->get('menus')->result_array();
    }
    function get_menus_type()
    {
        $this->db->order_by('idmenu_type', 'ASC');
        return $this->db->get('menu_type')->result_array();
    }
    
    function get_master_menus($MSM)
    {
        $this->db->where('Menu_Type',$MSM);
        $this->db->order_by('Menu_Name');
        return $this->db->get('menus')->result_array();
    }
    
    function get_menus_order()
    {
        $this->db->order_by('Menu_Parrent');
        return $this->db->get('menus')->result_array();
    }
     
    function get_all_menus_join()
    {
        $this->db->select('menus.*,pmenu.Menu_Name as pname');
        $this->db->join('menus as pmenu','pmenu.idmenus = menus.Menu_Parrent','LEFT');
        $this->db->order_by('Menu_Parrent', 'desc');
        return $this->db->get('menus')->result_array();
    }
      
    
    function get_role_menu($idrole)
    {
        $this->db->select('menus.*,');
        $this->db->join('menus','menus.idmenus = role_has_menus.RHMs_IdMenu');
        $this->db->where('RHMs_IdRole',$idrole);
        $this->db->order_by('Menu_Parrent');
        return $this->db->get_where('role_has_menus')->result_array();
    }

    function get_role_parent_menu($idrole)
    {
        $this->db->select('menus.*,role_has_menus.*');
        $this->db->join('menus','menus.idmenus = role_has_menus.RHMs_IdMenu');
        $this->db->where('RHMs_IdRole',$idrole);
//        $this->db->where('Menu_IsParent',1);        
        $this->db->order_by('RHMs_MenuPosition','ASC');
        return $this->db->get_where('role_has_menus')->result_array();
    }    

    function get_role_sub_menu($idrole,$idmenu)
    {
        $this->db->select('menus.*,');
        $this->db->join('menus','menus.idmenus = role_has_menus.RHMs_IdMenu');
                $this->db->where('Menu_Parrent',$idmenu);     
                $this->db->where('Menu_IsParent',0);       
                $this->db->where('RHMs_IdRole',$idrole);
                $this->db->order_by('idmenus');
        return $this->db->get_where('role_has_menus')->result_array();
    }    


    /*
     * function to add new menu
     */
    function add_menu($params)
    {
        $this->db->insert('menus',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update menu
     */
    function update_menu($idmenus,$params)
    {
        $this->db->where('idmenus',$idmenus);
        return $this->db->update('menus',$params);
    }
    
    /*
     * function to delete menu
     */
    function delete_menu($idmenus)
    {
        return $this->db->delete('menus',array('idmenus'=>$idmenus));
    }
    
    
    /*
     * Function to validate menu link is available or not
     */
    
     function validate_menu($params)
    {
        $this->db->select('Menu_link');
        return $this->db->get_where('menus',$params)->row_array();
    }
}
