<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelloToms extends CI_Controller {

	public function index()
	{	
		$this->db->select('*');
	    $this->db->from('db_post');
	    $this->db->order_by('id_post', 'DESC');
	    $this->db->limit(10);
		$isi['data']	= $this->db->get();
		$isi['komentar']	= $this->db->get('komentar');
		$this->load->model('model_komentar'); //load model
		$isi['hasilKomentar'] = $this->model_komentar->getKomentarUser();
		$this->load->view('front-end/HelloToms',$isi);
	}
	

	
}
?>