<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_cari extends CI_Model {

	public function cari($judul)
	{	

		$this->db->like('judul',$judul);
        $query  =   $this->db->get('db_post');
        return $query->result();

	}
}
?>
