<?php
class Users_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get users by idusers
     */
    function get_users($idusers)
    {
        return $this->db->get_where('users',array('idusers'=>$idusers))->row_array();
    }
    
    /*
     * Get all users count
     */
    function get_all_users_count()
    {
        $this->db->from('users');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all users
     */
    function get_all_users()
    {
        $this->db->order_by('idusers', 'desc');
        return $this->db->get('users')->result_array();
    }
        
    /*
     * function to add new users
     */
    function add_users($params)
    {
        $this->db->insert('users',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update users
     */
    function update_users($idusers,$params)
    {
        $this->db->where('idusers',$idusers);
        return $this->db->update('users',$params);
    }
    
    /*
     * function to delete users
     */
    function delete_users($idusers)
    {
        return $this->db->delete('users',array('idusers'=>$idusers));
    }
}
