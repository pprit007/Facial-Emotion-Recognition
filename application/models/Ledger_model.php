<?php
 
class Ledger_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get ledger by idledgers
     */
    function get_ledger($idledgers)
    {
        return $this->db->get_where('ledgers',array('idledgers'=>$idledgers))->row_array();
    }
    
    /*
     * Get all ledgers count
     */
    function get_all_ledgers_count()
    {
        $this->db->from('ledgers');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all ledgers
     */
    function get_all_ledgers($params = array())
    {
        $this->db->order_by('idledgers', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('ledgers')->result_array();
    }
    
    function get_all_ledgers_groups()
    {
        $this->db->order_by('LedgerName');
        $this->db->where('LedgerIsGroup',1);
        return $this->db->get('ledgers')->result_array();
    }
    
    function get_all_ledgerusers()
    {
        $this->db->order_by('LedgerName');
        $this->db->where('LedgerIsGroup',1);
        return $this->db->get('ledgers')->result_array();
    }
    
    function get_ledgers_bygroup($ledger_group)
    {
        $this->db->order_by('LedgerName');
        $this->db->where('LedgerGroup',$ledger_group);
        return $this->db->get('ledgers')->result_array();
    }
    
    function get_ledgers_bygroups($ledger_groups)
    {
        $this->db->order_by('LedgerName');
        $this->db->where_in('LedgerGroup',$ledger_groups);
        return $this->db->get('ledgers')->result_array();
    }
        
    /*
     * function to add new ledger
     */
    function add_ledger($params)
    {
        $this->db->insert('ledgers',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update ledger
     */
    function update_ledger($idledgers,$params)
    {
        $this->db->where('idledgers',$idledgers);
        return $this->db->update('ledgers',$params);
    }
    
    /*
     * function to delete ledger
     */
    function delete_ledger($idledgers)
    {
        return $this->db->delete('ledgers',array('idledgers'=>$idledgers));
    }
    
    
     /*
     * function to add fee heads
     */
    function add_fee_head($param)
    {
        $this->db->insert('ledgers',$param);
    }
    
     /*
     * function to show all fee heads
     */
    function show_fee_head()
    {
        return $this->db->get_where('ledgers',array('LedgerGroup'=>LED_FEE_HEADS))->result_array();
    }
    
    
     /*
     * function to show all fee heads
     */
    function show_single_fee_head($idledgers)
    {
        return $this->db->get_where('ledgers',array('idledgers'=>$idledgers))->row_array();
    }
    
    
     /*
     * function to edit fee heads
     */
    function fee_head_edit($idledgers,$param)
    {
        $this->db->where('idledgers',$idledgers);
        $this->db->update('ledgers',$param);
    }
}