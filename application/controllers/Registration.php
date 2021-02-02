<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registration extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    } 

    /*
     * Listing of gender
     */
    function index()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('User_FullName','Full Name','required');
        $this->form_validation->set_rules('User_Email','Email','trim|xss_clean|valid_email|required');
        $this->form_validation->set_rules('User_Mobile','Mobile Number','required|exact_length[10]');
        $this->form_validation->set_rules('User_PassKey','Password','trim|xss_clean|required');
        $this->form_validation->set_rules('User_CPassKey','Confirm Password','required|matches[User_PassKey]');
	if($this->form_validation->run())     
        {   
           
                $data['EmailExist']=$this->db->get_where('users',array('User_Email'=>$this->input->post('User_Email')))->row_array();
                    if(isset($data['EmailExist']))
                    {  
                        $data['err_message'] = 'Email Already Exist!';
                        $this->load->view('registration/index',$data);
                    }
                    else
                    {
                        $leger = array(
                            'LedgerName'=>$this->input->post('User_FullName'),
                            'LedgerCode'=>'User Registration',
                            'LedgerDesc'=>'User Registration',
                            );
                        
                        
                                    $this->load->model('Ledger_model');
                        $ledger_id = $this->Ledger_model->add_ledger($leger);
                        
                        $params = array(
				'idusers' =>$ledger_id,
				'User_FullName' => $this->input->post('User_FullName'),
				'User_Email' => $this->input->post('User_Email'),
				'User_Mobile' => $this->input->post('User_Mobile'),
				'User_RegDate' => date('Y-m-d H:i:s'),
				'User_RandCode' => rand(9999,999999),
                            );  
                        
                                    $this->load->model('User_model');
                        $user_id =$this->User_model->add_user($params);

                        $login = array(
				'idlogins ' =>$ledger_id,
				'LoginUsername' => $this->input->post('User_Email'),
				'LoginPassKey' => $this->password_crypt->hash($this->input->post('User_PassKey')),
				'LoginChangePassword' => 1,
				'LoginActive' => 0,
				'LoginOTP' => rand(9999,999999),
                            ); 
                        
                            $this->db->insert('logins',$login);
                        
                        redirect('otp/'. $this->uricryption->encode($login['LoginOTP']).'/'.$this->uricryption->encode($ledger_id));

    //                    $data['sccess_message'] = 'Your Registraion Done Succesfully, Please Check mailbox to verify Email!';
    //                    $data['_menubar']='web/menubar';
    //                    $data['_footer']='web/footer';
    //                    
    //                    $this->load->view('web/sign_up',$data);
    //                    echo "<script>
    //                    //Using setTimeout to execute a function after 5 seconds.
    //                    setTimeout(function () {
    //                       //Redirect with JavaScript
    //                       window.location.href= '".site_url('login')."';
    //                    }, 6000);
    //                    </script>";

                    }
        }
        else
        {   
            $this->load->view('registration/index');
        }
    } 
    
}
