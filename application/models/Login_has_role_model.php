<?php
 
class Login_has_role_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get login_has_role by LHRs_IdLogin
     */
    function get_login_has_role($LHRs_IdLogin)
    {
        return $this->db->get_where('login_has_roles',array('LHRs_IdLogin'=>$LHRs_IdLogin))->row_array();
    }
        
    /*
     * Get all login_has_roles
     */
    function get_all_login_has_roles()
    {
        $this->db->order_by('LHRs_IdLogin', 'desc');
        return $this->db->get('login_has_roles')->result_array();
    }

    function get_login_has_roles($idlogin)
    {
        $this->db->select('LHRs_IdRole,LHRs_Active,ledgers.LedgerName as RoleName');
        $this->db->join('ledgers','ledgers.idledgers = login_has_roles.LHRs_IdRole');
        $this->db->where('LHRs_IdLogin',$idlogin);
        return $this->db->get('login_has_roles')->result_array();
    }    
        
    /*
     * function to add new login_has_role
     */
    function add_login_has_role($params)
    {
        $this->db->insert('login_has_roles',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update login_has_role
     */
    function update_login_has_role($LHRs_IdLogin,$params)
    {
        $this->db->where('LHRs_IdLogin',$LHRs_IdLogin);
        return $this->db->update('login_has_roles',$params);
    }
    
    /*
     * function to delete login_has_role
     */
    function delete_login_has_role($idmenu,$LHRs_IdLogin)
    {
        return $this->db->delete('login_has_roles',array('LHRs_IdLogin'=>$LHRs_IdLogin,'LHRs_IdLogin'=>$idmenu));
    }
}