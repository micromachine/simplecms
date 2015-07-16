<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Database extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $arr['page'] = 'user';
        $this->load->model('database_model');
        $tables = $this->database_model->show_tables_status();
        $this->load->view('admin/vwManageDatabase', array('tables' => $tables));
    }      
     
    public function backupdb() {       
        $this->load->dbutil();
        $prefs = array(     
                'format'      => 'zip',             
                'filename'    => 'my_db_backup.sql'
              );
        $backup =& $this->dbutil->backup($prefs); 
        $db_name = 'full_db_backup-'. date("Y-m-d-H-i-s") .'.zip';
        $save = 'dbbackup/'.$db_name;
        $this->load->helper('file');
        write_file($save, $backup); 
        $this->load->helper('download');
        force_download($db_name, $backup);
    }
    public function dbbackup_table()
    {
       $this->load->dbutil();
       $prefs = array(
            'tables'      => $this->uri->segment(4),  // Array of tables to backup.
            'ignore'      => array(),           // List of tables to omit from the backup
            'format'      => 'zip',             // gzip, zip, txt
            'filename'    => $this->uri->segment(4),    // File name - NEEDED ONLY WITH ZIP FILES
            'add_drop'    => TRUE,              // Whether to add DROP TABLE statements to backup file
            'add_insert'  => TRUE,              // Whether to add INSERT data to backup file
            'newline'     => "\n"               // Newline character used in backup file
          );
        $backup =& $this->dbutil->backup($prefs);
        $db_name = 'table_'.$this->uri->segment(4).'_backup-'. date("Y-m-d-H-i-s") .'.zip';
        $save = 'dbbackup/'.$db_name;
        $this->load->helper('file');
        write_file($save, $backup); 
        $this->load->helper('download');
        force_download($db_name, $backup);
    }
    public function optimize_table() {
        $name = $_POST['name'];
        $this->load->dbutil();
        $is_added = $this->dbutil->optimize_table($name);
            if ($is_added) {
                        $message = "<strong> Tabela ".$name."</strong> została optymalizowana!";
                        $this->json_response(TRUE, $message);
                } else {
                        $message = "<strong> Tabela ".$name."</strong> nie została optymalizowana!";
                        $this->json_response(FALSE, $message);
                }
      }

      public function repair_table() {
        $name = $_POST['name'];
        $this->load->dbutil();
        $is_added = $this->dbutil->repair_table($name);
            if ($is_added) {
                        $message = "<strong> Tabela ".$name."</strong> została optymalizowana!";
                        $this->json_response(TRUE, $message);
                } else {
                        $message = "<strong> Tabela ".$name."</strong> nie została optymalizowana!";
                        $this->json_response(FALSE, $message);
                }
      }
      
      public function optimize_all() {
        
          $this->load->dbutil();

          
          
          
      }
      public function repair_all() {
        
          $this->load->dbutil();

          
          
          
      }
      
      
      
      
    private function json_response($successful, $message)
    {
        echo json_encode(array(
            'isSuccessful' => $successful,
            'message' => $message
        )); 
    }

       
        
   
    
    
    
    
    
    
    
    
    }

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
