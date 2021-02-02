<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Theme_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get theme by idtheme
     */
    function get_theme($idtheme)
    {
        return $this->db->get_where('theme',array('idtheme'=>$idtheme))->row_array();
    }
        
    /*
     * Get all theme
     */
    function get_all_theme()
    {
        $this->db->order_by('idtheme', 'desc');
        return $this->db->get('theme')->result_array();
    }
        
    /*
     * function to add new theme
     */
    function add_theme($params)
    {
        $this->db->insert('theme',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update theme
     */
    function update_theme($idtheme,$params)
    {
        $this->db->where('idtheme',$idtheme);
        return $this->db->update('theme',$params);
    }
    
    /*
     * function to delete theme
     */
    function delete_theme($idtheme)
    {
        return $this->db->delete('theme',array('idtheme'=>$idtheme));
    }
}