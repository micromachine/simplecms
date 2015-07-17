<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Town extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
//        $this->load->model('town_model');
//        $town = $this->town_model->show_all();
          $this->load->view('admin/vwManageTown');
  
    }      
      
    public function GetCountryName(){
        $this->load->model('town_model');
        $keyword=$this->input->post('keyword');
        $data=$this->town_model->GetRow($keyword);        
        echo json_encode($data);
  
    }
    
    public function edit(){
        $params = explode(':', $_POST['name']);
        $this->load->model('town_model');
        $data=$this->town_model->get_town($params);       
        $this->load->view('admin/vwEditTown');
        
        
    }

    public function show_town(){
        $array =  explode(':',$this->uri->segment(4));
        $this->load->model('town_model');
        $data=$this->town_model->voivodeship();       
        $dane['woj'] = $data;
        $this->load->view('admin/vwEditTown',array('voivodeship' => $dane));
        
    }
    public function update_town() {
        
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
