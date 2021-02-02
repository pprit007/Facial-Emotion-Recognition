<?php
 
class Role_has_menu_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Menu Management
     */
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
    
    function get_parent_menus($parent)
    {
        $this->db->where('Menu_IsParent',$parent);
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
        $this->db->select('menus.*,');
        $this->db->join('menus','menus.idmenus = role_has_menus.RHMs_IdMenu');
        $this->db->where('RHMs_IdRole',$idrole);
        $this->db->where('Menu_IsParent',1);        
        $this->db->order_by('Menu_Parrent');
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
    
    
    /*
     * Roles
     */
     /*
     * Get role_has_menu by RHMs_IdRole
     */
    function get_role_has_menu($idmenu,$RHMs_IdRole)
    {
        return $this->db->get_where('role_has_menus',array('RHMs_IdRole'=>$RHMs_IdRole,'RHMs_IdMenu'=>$idmenu))->row_array();
    }
        
    /*
     * Get all role_has_menus
     */
    function get_all_role_has_menus()
    {
        $this->db->order_by('RHMs_IdRole', 'desc');
        return $this->db->get('role_has_menus')->result_array();
    }
     
    /*
     * Get Role has menu by Role
     */
    function get_role_has_menus($role)
    {
        $this->db->select('role_has_menus.*,menus.*,menu_type.*');
        $this->db->join('menus','menus.idmenus = role_has_menus.RHMs_IdMenu');
        $this->db->join('menu_type','menu_type.idmenu_type = role_has_menus.RHMs_MenuType');
        $this->db->where('RHMs_IdRole',$role);
        return $this->db->get('role_has_menus')->result_array();
    }
         

    /*
     * function to add new role_has_menu
     */
    function add_role_has_menu($params)
    {
        $this->db->insert('role_has_menus',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update role_has_menu
     */
    function update_role_has_menu($RHMs_IdRole,$params)
    {
        $this->db->where('RHMs_IdRole',$RHMs_IdRole);
        return $this->db->update('role_has_menus',$params);
    }
    
    /*
     * function to delete role_has_menu
     */
    function delete_role_has_menu($idmenu,$RHMs_IdRole)
    {
        return $this->db->delete('role_has_menus',array('RHMs_IdRole'=>$RHMs_IdRole,'RHMs_IdMenu'=>$idmenu));
    }
    
    
    /*
     *Login has role 
     */
    function get_logins_with_groups()
    {
        $this->db->select('idlogins,LoginUsername,LoginActive,loginledgers.LedgerName as LedgerName,groups.LedgerName as GroupName');
        $this->db->join('ledgers as loginledgers','loginledgers.idledgers = logins.idlogins','LEFT');
        $this->db->join('ledgers as groups','groups.idledgers = loginledgers.LedgerGroup','LEFT');        
        $this->db->order_by('loginledgers.LedgerGroup');
        return $this->db->get('logins')->result_array();
    }
    
     /*
     * function to add new login_has_role
     */
    function add_login_has_role($params)
    {
        $this->db->insert('login_has_roles',$params);
        return $this->db->insert_id();
    }
    
    function get_login_has_roles($idlogin)
    {
        $this->db->select('LHRs_IdRole,LHRs_Active,ledgers.LedgerName as RoleName');
        $this->db->join('ledgers','ledgers.idledgers = login_has_roles.LHRs_IdRole');
        $this->db->where('LHRs_IdLogin',$idlogin);
        return $this->db->get('login_has_roles')->result_array();
    }  
    
       /*
     * function to delete login_has_role
     */
    function delete_login_has_role($idmenu,$LHRs_IdLogin)
    {
         $this->db->delete('login_has_roles',array('LHRs_IdLogin'=>$LHRs_IdLogin,'LHRs_IdRole'=>$idmenu));
    }
}
