<?php
class Users extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    } 

    /*
     * Listing of users
     */
    function index()
    {
        $data['users'] = $this->Users_model->get_all_users();
        
        $data['_view'] = 'users/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new users
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'User_FullName' => $this->input->post('User_FullName'),
				'User_Mobile' => $this->input->post('User_Mobile'),
				'User_Qualification' => $this->input->post('User_Qualification'),
				'User_Experience' => $this->input->post('User_Experience'),
				'User_KeySkills' => $this->input->post('User_KeySkills'),
				'User_PermAdd' => $this->input->post('User_PermAdd'),
				'User_CV' => $this->input->post('User_CV'),
            );
            
            $users_id = $this->Users_model->add_users($params);
            redirect('users/index');
        }
        else
        {            
            $data['_view'] = 'users/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a users
     */
    function edit()
    {   
         $data['education'] = $this->Education_model->get_all_education();
        // check if the users exists before trying to edit it
        $data['users'] = $this->Users_model->get_users($this->session->userdata('uid'));
        
        if(isset($data['users']['idusers']))
        {
            
            $this->load->library('form_validation');

            $this->form_validation->set_rules('User_Mobile','User FullName','required');
            $this->form_validation->set_rules('User_Qualification','Qualification','required');
            $this->form_validation->set_rules('User_Experience','Experience','required');
            $this->form_validation->set_rules('User_KeySkills','Key Skills','required');
            $this->form_validation->set_rules('User_PermAdd','Living Address','required');

            if($this->form_validation->run())     
            {   
                $params = array(
					'User_Mobile' => $this->input->post('User_Mobile'),
					'User_Qualification' => $this->input->post('User_Qualification'),
					'User_Experience' => $this->input->post('User_Experience'),
					'User_KeySkills' => $this->input->post('User_KeySkills'),
					'User_PermAdd' => $this->input->post('User_PermAdd'),
                );

                    $this->Users_model->update_users($this->session->userdata('uid'),$params); 
              
                
                //        Profile Image Upload Code        
        if(!empty($_FILES['User_CV']['name']))
            {              
                $config['upload_path']          = 'resumes';
                $config['allowed_types']        = '*';
                $config['max_size']             = FILES_SIZE;
                //$config['max_width']            = '500';
                //$config['max_height']           = '500';
                $config['encrypt_name'] = TRUE;                
                $data['upload_data'] = '';
                //load the upload library
                $this->load->library('upload', $config);
                //if not successful, set the error message
                $this->upload->initialize($config);
                $this->upload->overwrite = true;

                if(!$this->upload->do_upload('User_CV'))  
                {  
                     $data['imgerr']=$this->upload->display_errors();  
                     
                }
                else 
                {
                    $data['upload_data'] = $this->upload->data();
                    $params = array(
                        'User_CV' => $data['upload_data']['file_name'],
                   );
                    $this->Users_model->update_users($this->session->userdata('uid'),$params); 
                }
               
            }
//        Profile Image Upload Code Ends
                
                
                $this->session->set_flashdata('color', 'abc("success");');
                $this->session->set_flashdata('msg', 'Details Added Successfully');
                redirect('edit-details');
            }
            else
            {
                $data['_view'] = 'users/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The users you are trying to edit does not exist.');
    } 

    /*
     * Deleting users
     */
    function remove($idusers)
    {
        $users = $this->Users_model->get_users($idusers);

        // check if the users exists before trying to delete it
        if(isset($users['idusers']))
        {
            $this->Users_model->delete_users($idusers);
            redirect('users/index');
        }
        else
            show_error('The users you are trying to delete does not exist.');
    }
    
    function give_exam()
    {
        $examm = $this->db->get_where('exam_name',array('EN_Active'=>ACTIVE))->row_array();
        
        $params  = array(
            'User_idexam_name'=>$examm['idexam_name'],
            'User_ExamDate'=>date('Y-m-d H:i:s'),
        );
        $this->db->where('idusers',$this->session->userdata('uid'));
        $this->db->update('users',$params);
        
        redirect('Users/exam_paper/'.$examm['idexam_name']);
       
    }
    
    function exam_paper($idexam_name)
    {
                    $data['idexam_name'] = $idexam_name;
                     
                      if(isset($_POST) && count($_POST) > 0)     
                        { 
                        $ED_EP_Ans = $this->input->post('ED_EP_Ans');

                       foreach ($ED_EP_Ans as $que => $ans) {

                           $params = array(
                               'EP_iduser'=>$this->session->userdata('uid'),
                               'ED_idexam_paper'=>$que,
                               'ED_idexam_name'=>$idexam_name,
                               'ED_EP_Ans'=>$ans,
                           );
                                            $this->db->where('EP_iduser',$this->session->userdata('uid'));
                                            $this->db->where('ED_idexam_paper',$que);
                             $examqueinfo = $this->db->get('exam_data')->row_array();

                             if(empty($examqueinfo))
                             {
                                $this->db->insert('exam_data',$params);
                             }
                             if(!empty($examqueinfo))
                             {
                                  $params = array(
                                                'ED_EP_Ans'=>$ans,
                                                 );
                                 $this->db->where('EP_iduser',$this->session->userdata('uid'));
                                 $this->db->where('ED_idexam_paper',$que);
                                 $this->db->update('exam_data',$params);
                             }
                            } 
                             //  Alert Starts
                                $this->session->set_flashdata('color', 'abc("success");');
                                $this->session->set_flashdata('msg', 'Data Submitted Successfully');
                            redirect('Users/exam_paper/'.$idexam_name);
                         }
                         
                            
       
                                $this->db->select('exam_paper.*,exam_type.*');
                                $this->db->join('exam_type','exam_type.idexam_type  = exam_paper.EP_idexam_type','LEFT');
                                $this->db->order_by('idexam_paper', 'desc');
                                $this->db->where('EP_idexam_name', $idexam_name);
          $data['exam_paper'] =  $this->db->get('exam_paper')->result_array();
          $data['exam_type'] = $this->Exam_type_model->get_all_exam_type();
        $data['exam_name'] = $this->Exam_name_model->get_exam_name($idexam_name);
        $data['_view'] = 'users/exam';
        $this->load->view('layouts/main',$data);
    }
    
  
    
    
    function final_submit()
    {
        if(isset($_POST) && count($_POST) > 0)     
        { 
                $params = array('User_ExamStatus'=> 1);
                $this->db->where('idusers',$this->session->userdata('uid'));
                $this->db->update('users',$params);
                redirect('dashboard');
        }
    }
    
    
    
}
