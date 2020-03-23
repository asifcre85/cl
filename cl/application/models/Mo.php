<?php
class Mo extends CI_Model {

   

    function c($name){
    	$data=array(
    		name=>$name,
    	);
    	 $this->db->insert('text1',$data);
    }

    function u($name1,$id){
    	$data=array(
    		name=>$name1,
    	);
    	$this->db->where('id',$id);
		$this->db->update('text1', $data);
    }

    function d($name){
    	
    	$this->db->where('id',$name);
		$this->db->delete('text1');
    }


}
?>