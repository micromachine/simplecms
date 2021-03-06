<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Voivodeship_model extends CI_Model
{
   function __construct()
        {
                parent::__construct();
                $this->output->enable_profiler(TRUE);

        }

   public function show_all()
        {
        $voivodeship = $this->db->get('tbl_wojewodztwa')->result_array();
        return $voivodeship;
  
        }
    
        public function select_from($id){
            $voivodeship = $this->db->order_by('id')
            ->get_where('tbl_wojewodztwa', array('id' => $id))
            ->result_array();
        return $voivodeship;
        }
        
        public function update($id,$vname){
            $data = array(
               'id' => $id,
               'wojewodztwo' => $vname
            );
            $this->db->where('id', $id);
            $voivodeship = $this->db->update('tbl_wojewodztwa', $data); 
            return $voivodeship;
        }

        public function delete_voivodeship($id){
             $this->db->where('id', $id);
             $this->db->delete('tbl_wojewodztwa'); 
        }
              
}
