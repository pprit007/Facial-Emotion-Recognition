<?php
class Ajax extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    } 
    
    
   function send_data()
   {
       $params = array('UD_Emotion'=>$this->input->post('lbl'),
                       'UD_iduser'=> $this->session->userdata('uid'),
                       'UD_Date'=>date('y-m-d H:i:s')
                       
           );
       $this->db->insert('user_data',$params);
   }
    
    
}
