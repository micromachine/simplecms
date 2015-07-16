<?php defined('BASEPATH') OR exit('No direct script access allowed');


class database_model extends CI_Model
{
   function __construct()
        {
                parent::__construct();
        }

   public function show_tables_status()
        {
        $tables = $this->db->list_tables();
        return $tables;
        }



}
