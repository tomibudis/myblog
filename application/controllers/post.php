<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	public function index()
	{	
		$this->model_sequrity->getsequrity();
		$isi['content']	= 'tampilan_post';
		$isi['data']	= $this->db->get('db_post');
		$this->load->view('tampilan_home',$isi);
		
	}

}
?>