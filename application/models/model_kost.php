<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kost extends CI_Model {

	public function getdata($key)
	{	
		$this->db->where('id',$key);
		$hasil = $this->db->get('kost');
		return $hasil;

	}
	public function getupdate($key,$data)
	{	
		$this->db->where('id',$key);
		$this->db->update('kost',$data);
	}
	public function getinsert($data)
	{	
		$this->db->insert('kost',$data);
		
	}
	public function getdelete($key){
		$this->db->where('id',$key);
		$this->db->delete('kost');
	}
	}
?>
