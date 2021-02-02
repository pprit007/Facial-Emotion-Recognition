<?php
 
class Login_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get login by idlogins
     */
    function get_login($idlogins)
    {
        return $this->db->get_where('logins',array('idlogins'=>$idlogins))->row_array();
    }
        
    /*
     * Get all logins
     */
    function get_all_logins()
    {
        $this->db->order_by('idlogins', 'desc');
        return $this->db->get('logins')->result_array();
    }

    function get_logins_with_groups()
    {
        $this->db->select('idlogins,LoginUsername,LoginActive,loginledgers.LedgerName as LedgerName,groups.LedgerName as GroupName');
        $this->db->join('ledgers as loginledgers','loginledgers.idledgers = logins.idlogins','LEFT');
        $this->db->join('ledgers as groups','groups.idledgers = loginledgers.LedgerGroup','LEFT');        
        $this->db->order_by('loginledgers.LedgerGroup');
        return $this->db->get('logins')->result_array();
    }    
    
        
    /*
     * function to add new login
     */
    function add_login($params)
    {
        $this->db->insert('logins',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update login
     */
    function update_login($idlogins,$params)
    {
        $this->db->where('idlogins',$idlogins);
        return $this->db->update('logins',$params);
    }
    
    /*
     * function to delete login
     */
    function delete_login($idlogins)
    {
        return $this->db->delete('logins',array('idlogins'=>$idlogins));
    }

  
    function validate_user($loginParam)
    {
        $this->db->select('logins.*,LedgerName');
        $this->db->join('ledgers','ledgers.idledgers = logins.idlogins');
        return $this->db->get_where('logins',$loginParam)->row_array();
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
