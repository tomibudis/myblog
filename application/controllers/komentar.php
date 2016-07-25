<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

public function index()
	{	
		$this->model_sequrity->getsequrity();
		$isi['content']	= 'tampilan_komentar';
		$isi['data']	= $this->db->get('komentar');
		$this->load->model('model_komentar'); //load model
		$isi['hasilKomentar'] = $this->model_komentar->getKomentar(); //membuat data dari hasil transaksi masuk ke $data
		$this->load->view('tampilan_home',$isi);
	}
	 	
	public function hapus(){
		$this->model_sequrity->getsequrity();
		$this->load->model('model_komentar');
		$key = $this->uri->segment(3);
		$this->db->where('id_komentar',$key);
		$query = $this->db->get('komentar');
		if($query->num_rows()>0){
			$this->model_komentar->getdelete($key);
		}
		redirect('komentar');
	}
	public function simpan(){
		$key = $this->input->post('id_komentar');

		$data['nama']	= $this->input->post('nama');
		$data['komentar'] = $this->input->post('komentar');
		$data['judul']	= $this->input->post('judul');
		$this->load->model('model_komentar');
		$query =$this->model_komentar->getinsert($data);
		if($query = true){
			$this->session->set_flashdata('info','<script>swal("Success!", "Komentar anda telah terkirim!", "success");</script>');
		}
		redirect('front-end/helloToms');
	}
//public function index(){
//	$this->model_sequrity->getsequrity();
  //  $this->load->model('model_komentar'); //load model
    //$data['hasilKomentar'] = $this->model_komentar->getKomentar(); //membuat data dari hasil transaksi masuk ke $data
 
   	//$this->load->view('tampilan_home',$data);


//}

}