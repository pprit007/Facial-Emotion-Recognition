<?php
 
class Change_password extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library('Password_crypt');
        $this->load->library('form_validation');
    } 
    function index()
    {
        
        $idlogins = $this->session->userdata('uid');
        $userdata= $this->db->get_where('logins',array('idlogins'=>$idlogins))->row_array();
        
        $this->load->library('form_validation');

        $this->form_validation->set_rules('current_pass','Current Password','required');
        $this->form_validation->set_rules('new_pass','New Password','required');
        $this->form_validation->set_rules('conf_pass', 'Confirm Password', 'required|matches[new_pass]');
		
        if($this->form_validation->run())     
        {   
           $formdata=array(
                        'current_pass'=>$this->input->post('current_pass'),
                        'new_pass'=>$this->input->post('new_pass'),
                        'LoginPassKey'=>$this->input->post('conf_pass')
                       ); 
           
          $Log_UserPasskey = array(
              'LoginPassKey'=>$this->password_crypt->hash($this->input->post('conf_pass')),
              'LoginChangePassword'=>1,
          );    
          
          if($this->password_crypt->verify_hash($this->input->post('current_pass'), $userdata['LoginPassKey']))
            {
                  $this->db->where('idlogins',$idlogins);
                  $this->db->update('logins',$Log_UserPasskey);
                  //  Alert Starts
                $this->session->set_flashdata('color', 'abc("success");');
                $this->session->set_flashdata('msg', 'Password changed Successfully');
                  $data['msgs'] = "Password changed Successfully";
                  $data['_view'] = 'change_password/change_password';
                  $this-> load->view('layouts/main',$data);
           }
            else
            {
              $data['msge'] = "Current password Does not match";
              $data['_view'] = 'change_password/change_password';
              $this-> load->view('layouts/main',$data);
            }
           
        } 
        else {
                $data['_view'] = 'change_password/change_password';
               $this-> load->view('layouts/main',$data);
            }
        }
    
}
