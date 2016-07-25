<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kost extends CI_Controller {

	public function __contruct(){
		parent::__contruct();
		$this->gambar_path=realpath(APPPARH . '..images');
		$this->gambar_path_url=base_url().'images/';
	}
	public function index()
	{	
		$this->model_sequrity->getsequrity();
		$isi['content']= 'kost/tampil_datakost';
		$isi['data']	= $this->db->get('kost');
		$this->load->view('tampilan_home',$isi);

	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect ('login');
	}
	
	public function simpan(){
		$this->model_sequrity->getsequrity();
		$key = $this->input->post('id');
		$data['nama_kost']	= $this->input->post('nama_kost');
		$data['jenis_kost']	= $this->input->post('jenis_kost');
		$data['nama_pemilik'] = $this->input->post('nama_pemilik');
		$data['harga_sewa'] = $this->input->post('harga_sewa');
		$data['lokasi'] = $this->input->post('lokasi');
		$imagename = $_FILES['gambar_header']['name'];
	    $source = $_FILES['gambar_header']['tmp_name'];
	    $target = "assets/images/".$imagename;
	    $data['gambar_header']=$target;
	    $imagename1 = $_FILES['gambar2']['name'];
	    $source1 = $_FILES['gambar2']['tmp_name'];
	    $target1 = "assets/images/".$imagename1;
	    $data['gambar2']=$target1;
	    move_uploaded_file($source1, $target1);
		$this->load->model('model_kost');
		$query =$this->model_kost->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_kost->getupdate($key,$data);
			$this->session->set_flashdata('info','<script>alert("selama data berhasil disimapan")</script>');
		}
		else{
			$this->model_kost->getinsert($data);
			$this->session->set_flashdata('info','<script>alert("selama data berhasil disimapan")</script>');
		}
		redirect('kost');
	}
	public function hapus(){
		$this->model_sequrity->getsequrity();
		$this->load->model('model_kost');
		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$query = $this->db->get('kost');
		if($query->num_rows()>0){
			$this->model_kost->getdelete($key);
		}
		redirect('kost');
	}

}
?>
