<?php
class User_datum_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user_datum by iduser_data
     */
    function get_user_datum($iduser_data)
    {
        return $this->db->get_where('user_data',array('iduser_data'=>$iduser_data))->row_array();
    }
        
    /*
     * Get all user_data
     */
    function get_all_user_data($UD_iduser)
    {
         $this->db->where('UD_iduser',$UD_iduser);
        $this->db->order_by('iduser_data', 'desc');
        return $this->db->get('user_data')->result_array();
    }
    
    /*
     * Get all user_data
     */
    function get_all_userside_data()
    {
        $this->db->where('UD_iduser',$this->session->userdata('uid'));
        $this->db->order_by('iduser_data', 'desc');
        return $this->db->get('user_data')->result_array();
    }
        
    /*
     * function to add new user_datum
     */
    function add_user_datum($params)
    {
        $this->db->insert('user_data',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update user_datum
     */
    function update_user_datum($iduser_data,$params)
    {
        $this->db->where('iduser_data',$iduser_data);
        return $this->db->update('user_data',$params);
    }
    
    /*
     * function to delete user_datum
     */
    function delete_user_datum($iduser_data)
    {
        return $this->db->delete('user_data',array('iduser_data'=>$iduser_data));
    }
}