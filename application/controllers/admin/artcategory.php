<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Artcategory extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $arr['page'] = 'user';
        $this->load->view('admin/vwManageArtCategory',$arr);
    }

   
    
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
