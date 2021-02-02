<?php
 
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user by idusers
     */
    function get_user($idusers)
    {
        return $this->db->get_where('users',array('idusers'=>$idusers))->row_array();
    }
    
    /*
     * Get all users count
     */
    function get_all_users_count()
    {
        $this->db->from('logins');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all users
     */
    function get_all_users($params = array())
    {
        $this->db->select("logins.*,employees.*,designations.*");
        $this->db->join("employees",'employees.id_employee=logins.idlogins','LEFT');
        $this->db->join("designations",'designations.id_designation=employees.Emp_Designation','LEFT');
        $this->db->order_by('idlogins', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('logins')->result_array();
    }
        
    /*
     * function to add new user
     */
    function add_user($params)
    {
        $this->db->insert('users',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update user
     */
    function update_user($idusers,$params)
    {
        $this->db->where('idusers',$idusers);
        return $this->db->update('users',$params);
    }
    
    /*
     * function to delete user
     */
    function delete_user($idusers)
    {
        return $this->db->delete('users',array('idusers'=>$idusers));
    }
    
    function validate_user($loginParam)
    {
        $this->db->select('idusers,UserFName,UserLName,Username,UserPassKey');
        return $this->db->get_where('users',$loginParam)->row_array();
    }    
    
    function validate_user_if_exist($req_name)
    {
        $this->db->where('Username',$req_name);
        return $this->db->get('users')->row_array();
    }    
    
    function change_password($idusers,$formdataa)
    {
        $this->db->where('idusers',$idusers);
        $this->db->update('users',$formdataa);
    }
}
