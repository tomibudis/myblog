<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

	public function index()
	{	
		$this->model_sequrity->getsequrity();
		$isi['content']	= 'tampilan_pesan';
		$isi['data']	= $this->db->get('pesan');
		$this->load->view('tampilan_home',$isi);
	}
	public function hapus(){
		$this->model_sequrity->getsequrity();
		$this->load->model('model_pesan');
		$key = $this->uri->segment(3);
		$this->db->where('id_pesan',$key);
		$query = $this->db->get('pesan');
		if($query->num_rows()>0){
			$this->model_pesan->getdelete($key);
			$this->session->set_flashdata('info','<script>swal("SUCCESS !", "Data berhasil dihapus!", "success")</script>');
		}
		redirect('pesan');
	}
}
?>