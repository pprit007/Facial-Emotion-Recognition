<?php
class System_backup extends CI_Controller{
    function __construct()
    {
        parent::__construct();
//        $this->load->model('System/_backup_model');
    } 

   
    public function backup()
    {
   
        $data['title'] = 'Backup History';
        if ($this->input->server('REQUEST_METHOD') == "POST") {
            if ($this->input->post('backup') == "backup") {
                $this->session->set_flashdata('msg', '<div class="alert alert-success text-left">Backup created successfully!</div>');
                $this->load->helper('download');
                $this->load->dbutil();
                $filename = "db-" . date("Y-m-d_H-i-s") . ".sql";
                $prefs    = array(
                    'ignore'     => array(),
                    'format'     => 'txt',
                    'filename'   => 'mybackup.sql',
                    'add_drop'   => true,
                    'add_insert' => true,
                    'newline'    => "\n",
                );
                $backup = $this->dbutil->backup($prefs);
                $this->load->helper('file');
                write_file('db/' . $filename, $backup);
//                force_download($filename, $backup);
                
                //  Alert Starts
                $this->session->set_flashdata('color', 'abc("success");');
                $this->session->set_flashdata('msg', 'Backup Created !');
                redirect('system-backup');
            } 
        }
        $dir = "db/";

        // Sort in ascending order - this is default
        $data['dbfiles'] = scandir($dir);
        $data['_view'] = 'system_backup/backup';
        $this-> load->view('layouts/main',$data);
    }
    
    public function downloadbackup($file)
    {
        $this->load->helper('download');
        $filepath = "./backup/database_backup/" . $file;
        $data     = file_get_contents($filepath);
        $name     = $file;
        force_download($name, $data);
    }

    public function dropbackup($file)
    {
        if (!$this->rbac->hasPrivilege('backup', 'can_delete')) {
            access_denied();
        }
        unlink('./backup/database_backup/' . $file);
        redirect('admin/admin/backup');
    }

}
