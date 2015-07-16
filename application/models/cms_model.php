<?php defined('BASEPATH') OR exit('No direct script access allowed');


class cms_model extends CI_Model
{
   function __construct()
        {
                parent::__construct();
        }

   public function delete_cms($id)
        {
                try {
                        $this->db->delete('tbl_cms', array('id' => $id));
                } catch (Exception $e) {
                        $this->db->_error_message();
                }
        }


}
