<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Town_model extends CI_Model
{
   function __construct()
        {
                parent::__construct();
        }

    public function show_all()
        {
        $town = $this->db->get('tbl_miasta', 10, 20)->result_array();
        return $town;
  
        }
    
    
    public function GetRow($keyword) {        
        $this->db->order_by('id', 'DESC');
        $this->db->like("miasto", $keyword);
        return $this->db->get('tbl_miasta')->result_array();
    }

    

}
