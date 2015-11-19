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
        $this->output->cache(1);
        //$this->memcached_library->delete('miasta');
        $this->load->model('ads_model');
        $results = $this->memcached_library->get('miasta');
        	if (!$results) 
		{
                    $this->db->select('tbl_miasta.id, miasto,wojewodztwo');
                    $this->db->from('tbl_miasta');
                    $this->db->join('tbl_wojewodztwa', 'tbl_miasta.id_woj = tbl_wojewodztwa.id');
                    $this->db->order_by('tbl_miasta.id', 'DESC');
                    $town = $this->db->get();
                    $this->memcached_library->add('miasta', $town->result());
	            return $results = $this->memcached_library->get('miasta');
                }
		else 
		{
		//	var_dump($results);
			//$this->memcached_library->delete('miasta');
		}
        
//        $town = $this->ads_model->show_all();
//       var_dump($town);
        $this->load->view('admin/vwManageADS',array('miasta' => $results));
        
        

        
	}


        


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
