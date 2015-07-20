<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ads extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('memcached_library');

         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $this->load->model('ads_model');
        $town = $this->ads_model->show_all();
        $this->load->view('admin/vwManageADS',array('miasta' => $town));

	}




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
