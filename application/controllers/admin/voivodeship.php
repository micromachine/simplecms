<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Voivodeship extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('voivodeship_model');
       
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $arr['page'] = 'user';
        $voivodeship = $this->voivodeship_model->show_all();
        $this->load->view('admin/vwVoivodeshipManage', array('voivodeship' => $voivodeship));
    }      
    
    public function delete_province(){
        $this->voivodeship_model->delete_voivodeship($id = $_POST['id']);
        
        
    } //delete_province

    public function edit_province() {
        $voivodeship = $this->voivodeship_model->select_from($id = $this->uri->segment(4));
        $this->load->view('admin/vwVoivodeshipEdit',array('voivodeship' => $voivodeship));

     }//edit_province
    
     
    public function update() {
        $id = $_POST['id'];
        $vname = $_POST['vname'];
        $voivodeship = $this->voivodeship_model->update($id,$vname);

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
