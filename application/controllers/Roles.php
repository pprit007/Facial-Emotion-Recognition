<?php
 
class Roles extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Roles_model');
        $this->load->model('Ledger_model');
    } 
    /*
     * Roles
     */
     function roles_list()
    {   
        $this->load->library('form_validation');

        $this->form_validation->set_rules('LedgerName','Role Name','required');

        if($this->form_validation->run())     
        {   
            $params = array(
                'LedgerIsGroup' => 0,
                'LedgerParent' => 0,
                'LedgerGroup' => LED_ROLE,
                'LedgerCode' => $this->input->post('LedgerName'),
                'LedgerName' => $this->input->post('LedgerName'),
                'LedgerDesc' => $this->input->post('LedgerDesc'),
                'LedgerSeqNo' => '',
            );
            
            $ledger_id = $this->Ledger_model->add_ledger($params);
            //  Alert Starts
                $this->session->set_flashdata('color', 'abc("success");');
                $this->session->set_flashdata('msg', 'Role Added Successfully');
            redirect('roles-list');
        }
        else
        {	
            $data['all_roles'] = $this->Ledger_model->get_ledgers_bygroup(LED_ROLE);            
            
            $data['_view'] = 'roles/roles_list';
            $this->load->view('layouts/main',$data);
        }
    }    
    
     /*
     * Deleting role_has_menu
     */
    
    function role_delete($idledgers_en)
    {
        echo $idledgers = $this->uricryption->decode($idledgers_en);
        
        $role = $this->Ledger_model->get_ledger($idledgers);

        // check if the role_has_menu exists before trying to delete it
        if(isset($role['idledgers']))
        {
            $this->Ledger_model->delete_ledger($idledgers);
            //  Alert Starts
                $this->session->set_flashdata('color', 'abc("error");');
                $this->session->set_flashdata('msg', 'Role Deleted Successfully');
            redirect('roles-list');
        }
        else
            show_error('The role you are trying to delete does not exist.');
    }
  
}
