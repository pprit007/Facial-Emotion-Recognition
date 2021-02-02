<?php
 
class User_role_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user_role by iduser_roles
     */
    function get_user_role($iduser_roles)
    {
        return $this->db->get_where('user_roles',array('iduser_roles'=>$iduser_roles))->row_array();
    }
        
    /*
     * Get all user_roles
     */
    function get_all_user_roles()
    {
        $this->db->order_by('iduser_roles', 'desc');
        return $this->db->get('user_roles')->result_array();
    }
        
    /*
     * function to add new user_role
     */
    function add_user_role($params)
    {
        $this->db->insert('user_roles',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update user_role
     */
    function update_user_role($iduser_roles,$params)
    {
        $this->db->where('iduser_roles',$iduser_roles);
        return $this->db->update('user_roles',$params);
    }
    
    /*
     * function to delete user_role
     */
    function delete_user_role($iduser_roles)
    {
        return $this->db->delete('user_roles',array('iduser_roles'=>$iduser_roles));
    }
}
