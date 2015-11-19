<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Ads_model extends CI_Model
{
   function __construct()
        {
                parent::__construct();
        }

    public function show_all()
        {
        $results = $this->memcached_library->get('miasta');

               
        	if (!$results) 
		{
	                $town = $this->db->get('tbl_miasta');
        		$this->memcached_library->add('miasta', $town->result());
	                return $results = $this->memcached_library->get('miasta');
			
                }
		else 
		{
		//	var_dump($results);
			//$this->memcached_library->delete('miasta');
		}
        

        
        }
    
    
 
    
}
