<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {

	public function getdata($key)
	{	
		$this->db->where('username',$key);
		$hasil = $this->db->get('admin');
		return $hasil;

	}
	public function getupdate($key,$data)
	{	
		$this->db->where('id_username',$key);
		$this->db->update('admin',$data);
	}
	public function getinsert($data)
	{	
		$this->db->insert('admin',$data);
		
	}
	public function getdelete($key){
		$this->db->where('id_username',$key);
		$this->db->delete('admin');
	}
	}
?>
