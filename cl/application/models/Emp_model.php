<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Emp_model extends CI_Model {
	public function __construct() {
		parent::__construct(); 
	}
	public function getRecord($rowno,$rowperpage) {			
		$this->db->select('*');
		$this->db->from('developers');
        $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();       	
		return $query->result_array();
	}
	public function getRecordCount() {
    	$this->db->select('count(*) as allcount');
      	$this->db->from('developers');
      	$query = $this->db->get();
      	$result = $query->result_array();      
      	return $result[0]['allcount'];
    }

    
}