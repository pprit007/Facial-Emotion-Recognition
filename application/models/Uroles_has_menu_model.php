<?php
 
class Uroles_has_menu_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get uroles_has_menu by iduroles_has_menu
     */
    function get_uroles_has_menu($iduroles_has_menu)
    {
        return $this->db->get_where('uroles_has_menu',array('iduroles_has_menu'=>$iduroles_has_menu))->row_array();
    }
        
    /*
     * Get all uroles_has_menu
     */
    function get_all_uroles_has_menu()
    {
        $this->db->order_by('iduroles_has_menu', 'desc');
        return $this->db->get('uroles_has_menu')->result_array();
    }
        
    /*
     * function to add new uroles_has_menu
     */
    function add_uroles_has_menu($params)
    {
        $this->db->insert('uroles_has_menu',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update uroles_has_menu
     */
    function update_uroles_has_menu($iduroles_has_menu,$params)
    {
        $this->db->where('iduroles_has_menu',$iduroles_has_menu);
        return $this->db->update('uroles_has_menu',$params);
    }
    
    /*
     * function to delete uroles_has_menu
     */
    function delete_uroles_has_menu($iduroles_has_menu)
    {
        return $this->db->delete('uroles_has_menu',array('iduroles_has_menu'=>$iduroles_has_menu));
    }
}
