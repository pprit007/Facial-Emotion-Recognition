    <?php
class Email extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library('Password_crypt');
        $this->load->library('phpmailer_lib');
    } 
    
    
    function otp($otp_en,$idusers_en)
    {
         $idusers =  $this->uricryption->decode($idusers_en);
        $ud = $this->db->get_where('users',array('idusers'=>$idusers))->row_array();
      
         $this->load->library('phpmailer_lib');
                  
                  $this->db->select('ledgers.*,logins.*');
                  $this->db->join('ledgers','ledgers.idledgers=logins.idlogins','LEFT');
          $user = $this->db->get_where('logins',array('idlogins'=>$idusers))->row_array();
         
          
                    $subject = 'Account Verification';
                    $mail = $this->phpmailer_lib->load();
                   
                    // SMTP configuration
                    $mail->isSMTP();
                    $mail->Host     = 'smtp.googlemail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'Your gmail';
                    $mail->Password = 'password';
                    $mail->SMTPSecure = 'ssl';
                    $mail->Port     = 465;
        
                    $mail->setFrom('From  Mail','Test Name');
                    $mail->addReplyTo('Reply to  Mail','Test Name');

                    // Add a recipient

                    // Add cc or bcc 
//                    $mail->addCC('cc@example.com');
//                    $mail->addBCC('bcc@example.com');

                    // Email subject
                    $mail->Subject = $subject;

                    // Set email format to HTML
                    $mail->isHTML(true);

                    // Email body content
                    //Email content
                    
                     //Email content
                    $htmlContent = '<h1>Final Project</h1>';
                    $htmlContent .= '<h3>Verification Mail</h3>';
                    $htmlContent .= '<p>Dear '.$ud['User_FullName'].' click on below link to verify your account</p>';
                    $htmlContent .= '<a href="'. site_url('verify-email/'.$otp_en.'/'.$idusers_en).'">Click Here To Verify your account</a>';
                 
                    $mail->Body = $htmlContent;
                    $mail->addAddress($user['LoginUsername']);
                    //Send email
                    if($mail->send())
                    {
                       echo "<br /><h3 style='color:green;text-align:center'> Verification Link Sent at Your mail please check your mailbox or spam folder to verify your account ! </h3>";
       
                        echo "<script>
                        //Using setTimeout to execute a function after 5 seconds.
                        setTimeout(function () {
                           //Redirect with JavaScript
                           window.location.href= '".site_url('login')."';
                        }, 2000);
                        </script>";
                    }
           
    }
    
    function forgot_pass()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user_loginn','User Name','trim|xss_clean|required');
        $data = array();
        if($this->form_validation->run())
        {
                $loginParam = array(
                    'LoginUsername' => $this->input->post('user_loginn'),
                    );
                             $this->load->model('Login_model');
                $loginauth = $this->Login_model->validate_user($loginParam);
                if(isset($loginauth['idlogins']))
                  {
                   $idusersen =  $this->uricryption->encode($loginauth['idlogins']);
                   $otp = rand(999,9999);
                   $otpen =  $this->uricryption->encode($otp);
                   
                   $this->db->where('idlogins',$loginauth['idlogins']);
                   $this->db->update('logins',array('LoginOTP'=>$otp));
                   
                   // PHPMailer object
                 $mail = $this->phpmailer_lib->load();
                   
                    // SMTP configuration
                    $mail->isSMTP();
                    $mail->Host     = 'smtp.googlemail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'Your gmail';
                    $mail->Password = 'password';
                    $mail->SMTPSecure = 'ssl';
                    $mail->Port     = 465;
        
                  
                    $mail->setFrom('From  Mail', 'Name');
                    $mail->addReplyTo('Reply to Mail', 'Name');

                    // Add a recipient
                    $mail->addAddress($loginauth['LoginUsername']);

                    // Add cc or bcc 
//                    $mail->addCC('cc@example.com');
//                    $mail->addBCC('bcc@example.com');

                    // Email subject
                    $mail->Subject = 'Forgot Password';

                    // Set email format to HTML
                    $mail->isHTML(true);

                    // Email body content
                    //Email content
                    $mailContent = '<h1>Final Project</h1>';
                    $mailContent .= '<h3>Forgot Password</h3>';
                    $mailContent .= '<p>Dear '.$loginauth['LedgerName'].' click below link to change your password</p>';
                    $mailContent .= '<a href="'. site_url('reset-password/'.$otpen.'/'.$idusersen).'">Click Here To Reset Password</a>';

                    $mail->Body = $mailContent;
                    // Send email
                    if(!$mail->send()){
                        echo 'Message could not be sent.';
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                    }else{
                     echo "<br /><h3 style='color:green;text-align:center'> Password Reset Link Sent at Your mail, Please check your mailbox or spam folder to verify your account ! </h3>";
                    }
         }
         else{
                    //echo "NO USER";
                    $data['errorf']="<span class='text-danger'>User Not Exists or Not Active</span>";
//                    redirect('sign-in');
                }
        }
            $this->session->sess_destroy();
            $this->load->view('login/login',$data);
        
    }

    function verify_email($otp_en,$idusers_en)
    {
        $idusers =  $this->uricryption->decode($idusers_en);
        $otp =  $this->uricryption->decode($otp_en);
        
                   $this->db->select('ledgers.*,logins.*');
                  $this->db->join('ledgers','ledgers.idledgers=logins.idlogins','LEFT');
          $ud = $this->db->get_where('logins',array('idlogins'=>$idusers))->row_array();
        
        if($ud['LoginOTP']==$otp)
        {
            //Login Active
            $this->db->where('idlogins',$idusers);  
            $this->db->update('logins',array('LoginActive'=>1));
            
            //User has Role
           $params = array(
               'LHRs_IdLogin' => $idusers,
               'LHRs_IdRole' => USERREG,               
               'LHRs_Active' => 1,
           );
                                $this->load->model('Role_manager_model');
           $login_has_role_id = $this->Role_manager_model->add_login_has_role($params);
            
            echo "<span style='color:green'>Verification Done Successfully !</span>";
        
            echo "<script>
        //Using setTimeout to execute a function after 5 seconds.
        setTimeout(function () {
           //Redirect with JavaScript
           window.location.href= '".site_url('login')."';
        }, 2000);
        </script>";
        }
        else {
            echo "<span style='color:red'>Invalid OTP! Resend OTP</span>";
            echo "<script>
        //Using setTimeout to execute a function after 5 seconds.
        setTimeout(function () {
           //Redirect with JavaScript
           window.location.href= '".site_url('resend-verification')."';
        }, 2000);
        </script>";
            
        }
    }
    
    function reset_password($otp_en,$idusers_en)
    {
       
        $data['idusers'] =  $this->uricryption->decode($idusers_en);
        $data['otp'] =  $this->uricryption->decode($otp_en);
         $loginParam = array(
                    'idlogins' => $data['idusers'],
                    );
                    $this->load->model('Login_model');
       $loginauth = $this->Login_model->validate_user($loginParam);
        
        if($loginauth['LoginOTP']==$data['otp'])
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('User_PassKey','Password','trim|xss_clean|required');
            $this->form_validation->set_rules('cpass','Confirm Password','required|matches[User_PassKey]');
		
                if($this->form_validation->run())     
                {   
                    $params = array(
                                        'LoginPassKey' => $this->password_crypt->hash($this->input->post('User_PassKey')),
                    );

                    $this->db->where('idlogins',$data['idusers']);
                    $this->db->update('logins',$params);
                    $data['sccess_message'] = 'Your Password changed successfully !';
                    $this->load->view('login/reset_password',$data);
                    echo "<script>
                        //Using setTimeout to execute a function after 5 seconds.
                            setTimeout(function () {
                              //Redirect with JavaScript
                               window.location.href= '".site_url('sign-in')."';
                           }, 1000);
                            </script>";
                }  
                else {
                   $this->load->view('login/reset_password',$data); 
                }
        }
        else
        {
            echo "<h3 style='color:red;text-align:center'>Link Expired ! Forgot Password Again</h3>";
            echo "<script>
                    //Using setTimeout to execute a function after 5 seconds.
                        setTimeout(function () {
                          //Redirect with JavaScript
                           window.location.href= '".site_url('forgot-password')."';
                       }, 2000);
                 </script>";
        }
       
    }
    
     
    function resend_verification()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('User_Email','Email','valid_email|required');
		
	if($this->form_validation->run())     
        {   
            $params = array(
				'LoginOTP' => rand(9999,999999),
            );
            
                                    $this->db->select('users.*,logins.*');
                                    $this->db->join('logins','logins.idlogins=users.idusers','LEFT');
                $data['EmailExist']=$this->db->get_where('users',array('User_Email'=>$this->input->post('User_Email')))->row_array();
                if(isset($data['EmailExist']))
                {  
                    if($data['EmailExist']['LoginActive'] != 1)
                    { 
                        $user_id = $data['EmailExist']['idusers'];
                        $this->db->where('idlogins',$user_id);
                        $this->db->update('logins',$params);
                        redirect('otp/'. $this->uricryption->encode($params['LoginOTP']).'/'.$this->uricryption->encode($user_id));
                    }
                    else
                    {
                        $data['err_message'] = 'Your account already verified, Please login with your account!<br>';
                        $this->load->view('registration/resend_verification',$data);   
                    }
                    
                }
                else
                {
                    $data['err_message'] = 'Your are not register to our system, Please register and then verify your account !<br>';
                    $this->load->view('registration/resend_verification',$data);
                }
        }
        else
        {   
            $this->load->view('registration/resend_verification');
        }
    
        
    }
  
}
