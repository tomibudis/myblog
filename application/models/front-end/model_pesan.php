<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pesan extends CI_Model {

	public function getdata($key)
	{	
		$this->db->where('id_pesan',$key);
		$hasil = $this->db->get('pesan');
		return $hasil;
	}

	public function getinsert($data)
	{	
		$this->db->insert('pesan',$data);	
	}
	public function getdelete($key){
		$this->db->where('id_post',$key);
		$this->db->delete('db_post');
	}
	}
?>