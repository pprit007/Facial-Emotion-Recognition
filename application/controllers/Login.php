<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->library('Password_crypt');
    } 

    /*
     * Listing of gender
     */
    function index()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user_login','User Name','trim|xss_clean|required');
        $this->form_validation->set_rules('user_password','Password','trim|xss_clean|required');
        $data = array();
        if($this->form_validation->run())
        {
                $loginParam = array(
                    'LoginUsername' => $this->input->post('user_login'),
                    'LoginActive'=>1
                    );

                $loginauth = $this->Login_model->validate_user($loginParam);
                if(isset($loginauth['idlogins'])){
                    if($this->password_crypt->verify_hash($this->input->post('user_password'), $loginauth['LoginPassKey']))
                    {
                        $this->load->model('Login_has_role_model');
                        $login_roles = $this->Login_has_role_model->get_login_has_roles($loginauth['idlogins']);

                        $logindetails = Array(
                            'uid' => $loginauth['idlogins'],
                            'uname' => $loginauth['LoginUsername'],
                            'ufname' => $loginauth['LedgerName'],
                            'urole' => $login_roles[0]['LHRs_IdRole'],
                            'uroles' => $login_roles,
                        );
                        $this->session->set_userdata($logindetails);
//                        echo "<pre>";
//                        print_r($login_roles[0]['LHRs_IdRole']);
//                        
                        redirect('dashboard');
                    }else{
                        $data['error']="<span class='text-danger'>Password Does Not Match</span>";
                        //print_r($userauth);
                        //echo $this->password_crypt->hash($this->input->post('user_password'));
//                        redirect('sign-in');
                    }
                }else{
                    //echo "NO USER";
                    $data['error']="<span class='text-danger'>User Not Exists or Not Active</span>";
//                    redirect('sign-in');
                }
         }
                $this->session->sess_destroy();
                $this->load->view('login/login',$data);
        
    }
    
//    function faculty_login()
//    {
//        $this->load->library('form_validation');
//        $this->form_validation->set_rules('user_login','User Name','trim|xss_clean|required');
//        $this->form_validation->set_rules('user_password','Password','trim|xss_clean|required');
//
//        if($this->form_validation->run())
//        {
//                $loginParam = array(
//                    'FacUid' => $this->input->post('user_login'),
//                    'FacActive'=>1
//                    );
//
//                $this->load->model('facpersonal_model');
//                $userauth = $this->facpersonal_model->validate_faculty($loginParam);
//                        //echo "<pre>";
//                        //print_r($userauth);
//                if(isset($userauth['idfacpersonal'])){
//                    if($this->password_crypt->verify_hash($this->input->post('user_password'), $userauth['FacPassword']))
//                    {
//                        $userlogindetails = Array(
//                            'fid' => $userauth['idfacpersonal'],
//                            'fname' => $userauth['FacFName'].' '.$userauth['FacLName'],
//                        );
//                        $this->session->set_userdata($userlogindetails);
//                        redirect('faculty-dasboard');
//                    }else{
//
//                        //print_r($userauth);
//                        //echo $this->password_crypt->hash($this->input->post('user_password'));
//                        redirect('faculty-login');
//                    }
//                }else{
//                    //echo "NO USER";
//                    redirect('faculty-login');
//                }
//         }else{
//                $this->session->sess_destroy();
//                $this->load->view('login/faculty_login');
//        }
//    }
    
    function change_role($idrole_en){
        $idrole = $this->uricryption->decode($idrole_en);
        $logindetails = Array(
            'urole' => $idrole,
        );
        $this->session->set_userdata($logindetails);
        redirect('dashboard');
    }    

    /*
     * Student Logout
     */

    function logout()
    {
        $this->session->sess_destroy();
        redirect('sign-in');
    }
    
    // Login hook - To check if session exits
    function login_check()
    {
        if($this->session->userdata('uid'))
        {
           echo "<pre>";
           print_r($this->session->userdata());
        }else{
        redirect('sign-in');
        }        
    }

    function show_menu()
    {
        $this->menulib->get_menu();
    }
   
}