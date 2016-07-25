<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	 function __construct()
    {
   parent::__construct();
   $this->load->model('model_pagination');
   $this->load->library('pagination'); //call pagination library
   }
	public function index()
	{	
		$this->load->view('front-end/contact');
	}
	public function simpan(){
		$key = $this->input->post('id_pesan');
		$data['nama']	= $this->input->post('nama');
		$data['email']	= $this->input->post('email');
		$data['isi_pesan'] = $this->input->post('isi_pesan');
		$data['tanggal'] = $this->input->post('tanggal');
		$this->load->model('model_pesan');
		$query =$this->model_pesan->getinsert($data);
		if($query = true){
			$this->session->set_flashdata('info','<script>swal("SUCCESS !", "Pesan Telah Terkirim!", "success")</script>');
		}
		$this->db->select('*');
      $this->db->from('db_post');
      $getData = $this->db->get('');
      $a = $getData->num_rows();
      $config['per_page'] = '4';
      $isi['results'] = $this->model_pagination->getData($config['per_page'],$this->uri->segment(3));
      $isi['artikel_lainnya'] = $this->model_pagination->getArtikel($config['per_page'],$this->uri->segment(3));
		$this->load->view('front-end/contact',$isi);
	}
}
?>

