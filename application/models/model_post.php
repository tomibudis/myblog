<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_post extends CI_Model {

	public function getdata($key)
	{	
		$this->db->where('id_post',$key);
		$hasil = $this->db->get('db_post');
		return $hasil;
	}
	public function getupdate($key,$data)
	{	
		$this->db->where('id_post',$key);
		$this->db->update('db_post',$data);
	}
	public function getinsert($data)
	{	
		$this->db->insert('db_post',$data);
		
	}
	public function getdelete($key){
		$this->db->where('id_post',$key);
		$this->db->delete('db_post');
	}
	public function jumlahPost(){

	    
	    $query = $this->db->get('db_post');
	   
	    return $query -> num_rows();    
	   }
	
	}
?>