<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cms extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $arr['page'] = 'cms';
	$save_date = date("Ymd");
        $config['upload_path'] = $_SERVER['DOCUMENT_ROOT']."/"."uploads/images/".$save_date."/";
        $qry ='Select * from tbl_cms'; // select data from db
        $arr['cms'] = $this->db->query($qry)->result_array();        
        $this->load->view('admin/vwManageCMS',$arr);
	if (!is_dir($config['upload_path'])) {
 	 mkdir($config['upload_path'], 0777, TRUE);
	}
	}





     public function edit_cms($id='') {
        $arr['page'] = 'cms';
        if($id!=''){
          $qry ='Select id,label,`content` from tbl_cms where id='.$id ; // select data from db
        $arr['cms'] = $this->db->query($qry)->result_array();
        $this->load->view('admin/vwEditCMS',$arr);
        }else{
            redirect('admin/cms');
        }
    }
       public function update_cms() {
           $id = $_POST['pst_id'];
           $new_content = $_POST['tst_content'];
            
        if(isset($id) && !empty($id) ){
             $sql = "update tbl_cms set `content`='".$new_content."' where id=".$id;
             $val = $this->db->query($sql,array($new_content ,$id ));
             redirect('admin/cms/edit_cms/'.$id);
        }
        
        $arr['page'] = 'cms';
        $this->load->view('admin/vwEditCMS',$arr);
   } 
        public function show_cms() {
	$arr['page'] = 'cms';
        $this->load->view('admin/vwAddCMS');

    }
	public function insert_cms() { 
	   $content = $_POST['tst_content'];
	   $name = $_POST['lname'];
	if (!empty($content) && !empty($name)) {
	$sql = "INSERT INTO tbl_cms (id, label, content) VALUES (null,'$name','$content')";
	$val = $this->db->query($sql);
	$sql1 = "select * from tbl_wojewodztwa";
	$val = $this->db->query($sql1);
	}
	redirect('admin/cms/');

	}
	public function delete_cms()
    	{
                $this->load->model('cms_model');
                $id = $this->uri->segment(4);
                $is_deleted = $this->cms_model->delete_cms($id);
                if ($is_deleted) {
                        $message = "<strong> Artykuł o id ".$this->input->post('id')."</strong> został usunięty";
                        $this->json_response(TRUE, $message);

                } else {
                        $message = "<strong> Usunięcie artykułu o id ".$this->input->post('id')."</strong> nie udało się !";
                        $this->json_response(FALSE, $message);
                }
        redirect('admin/cms/');

    	} // end_delete_cms

	public function json_response($successful, $message)
    	{
        echo json_encode(array(
                        'isSuccessful' => $successful,
                        'message' => $message
        ));
        } // end_json_response




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
