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
      /*
        $this->db->order_by('id', 'DESC');
        $this->db->like("miasto", $keyword);
        return $this->db->get('tbl_miasta')->result_array();
      */
        $this->db->select('tbl_miasta.id, miasto,wojewodztwo');
        $this->db->from('tbl_miasta');
        $this->db->join('tbl_wojewodztwa', 'tbl_miasta.id_woj = tbl_wojewodztwa.id');
        $this->db->order_by('tbl_miasta.id', 'DESC');
        $this->db->like("miasto", $keyword);
        return $this->db->get()->result_array();

        
    }

    public function get_town($param) {
     //   $where = "name=$param[0] AND status='boss' OR status='active'";
     //   $this->db->where($where);
     //select * from tbl_miasta Join tbl_wojewodztwa  ON tbl_miasta.id_woj = tbl_wojewodztwa.id where miasto ='Leszno' AND wojewodztwo='wielkopolskie';
     //SELECT * FROM (`tbl_miasta`) JOIN `tbl_wojewodztwa` ON `tbl_miasta`.`id_woj` = `tbl_wojewodztwa`.`id` WHERE `miasto='Leszno'` AND wojewodztwo='wielkopolskie'
        $this->db->select('*');
        $this->db->from('tbl_miasta');
        $this->db->join('tbl_wojewodztwa', 'tbl_miasta.id_woj = tbl_wojewodztwa.id');
        //$where = 'miasto=$param[0] AND wojewodztwo=$param[1];';
        $this->db->where('miasto', $param[0]);
        $this->db->where('wojewodztwo', $param[1]); 
        return $this->db->get()->result_array();
        
    }

    public function get_single_town($param) {
        
    }
    
    
    public function update_town($town,$voivodeship,$id_town){
        $data = array(
               'miasto' => $town,
               'id_woj' => $voivodeship
                );
        $this->db->where('id', $id_town);
        return $this->db->update('tbl_miasta', $data); 
        
    }

    public function voivodeship() {
            $this->db->select('*');
            $this->db->from('tbl_wojewodztwa');
            return $this->db->get()->result_array();
       
            
    }
    
    
}
