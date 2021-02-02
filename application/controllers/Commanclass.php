<?php

class Commanclass extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('uid'))
        {
            redirect('sign-out');
        }
    }
    
    function active_sidebar($status = 1){
        if($status == 1)
        {
            $this->session->userdata('sidebar',0);
        }else{
            $this->session->userdata('sidebar',1);
        }
        redirect('dashboard');
    }
    
    
}