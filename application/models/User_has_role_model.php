<?php
 
class User_has_role_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user_has_role by iduser_has_roles
     */
    function get_user_has_role($iduser_has_roles)
    {
        return $this->db->get_where('user_has_roles',array('iduser_has_roles'=>$iduser_has_roles))->row_array();
    }
        
    /*
     * Get all user_has_roles
     */
    function get_all_user_has_roles()
    {
        $this->db->order_by('iduser_has_roles', 'desc');
        return $this->db->get('user_has_roles')->result_array();
    }
        
    /*
     * function to add new user_has_role
     */
    function add_user_has_role($params)
    {
        $this->db->insert('user_has_roles',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update user_has_role
     */
    function update_user_has_role($iduser_has_roles,$params)
    {
        $this->db->where('iduser_has_roles',$iduser_has_roles);
        return $this->db->update('user_has_roles',$params);
    }
    
    /*
     * function to delete user_has_role
     */
    function delete_user_has_role($iduser_has_roles)
    {
        return $this->db->delete('user_has_roles',array('iduser_has_roles'=>$iduser_has_roles));
    }
}
