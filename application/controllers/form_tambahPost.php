<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_tambahPost extends CI_Controller {

	public function __contruct(){
		parent::__contruct();
		$this->gambar_path=realpath(APPPARH . '..images');
		$this->gambar_path_url=base_url().'images/';
	}
	public function index()
	{	
		$this->model_sequrity->getsequrity();
		$isi['content']	= 'form_tambahPost';
		$isi['data']	= $this->db->get('db_post');
		$isi['id_post'] = '';
		$isi['judul']	='';
		$isi['gambar']	='';
		$isi['tag']		='';
		$isi['descr']	=''; 
		$this->load->view('tampilan_home',$isi);

	}
	public function simpan(){
		$this->model_sequrity->getsequrity();
		$key = $this->input->post('id_post');
		$data['judul']	= $this->input->post('judul');
		$data['tag']	= $this->input->post('tag');
		$data['descr'] = $this->input->post('descr');
		$data['tanggal'] = $this->input->post('tanggal');
		$imagename = $_FILES['gambar']['name'];
		 if(empty($imagename)){
	    	$imagename =  $gambar;
	    }
	    $source = $_FILES['gambar']['tmp_name'];
	    $target = "assets/images/".$imagename;
	    $data['gambar']=$target;
	    move_uploaded_file($source, $target);
		$this->load->model('model_post');
		$query =$this->model_post->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_post->getupdate($key,$data);
			$this->session->set_flashdata('info','<script>swal("SUCCESS !", "Data berhasil diubah!", "success")</script>');
		}
		else{
			$this->model_post->getinsert($data);
			$this->session->set_flashdata('info','<script>swal("Tersimpan !", "Data Berhasil Di Simpan!", "success")</script>');
		}
		redirect('post');
	}
	public function edit(){
		$this->model_sequrity->getsequrity();
		$isi['content']	= 'form_tambahPost';
		$isi['data']	= $this->db->get('db_post');
		$key = $this->uri->segment(3);
		$this->db->where('id_post',$key);
		$query =$this->db->get('db_post');
		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$isi['id_post']	=$row->id_post;
				$isi['judul']	=$row->judul;
				$isi['tag']		=$row->tag;
				$isi['gambar']		=$row->gambar;
				$isi['descr']	=$row->descr; 	
			}
		}
		else{
				$isi['judul']	='';
				$isi['tag']		='';
				$isi['gambar']	=''; 
				$isi['descr']	=''; 
		}
		$this->load->view('tampilan_home',$isi);
	}
	public function hapus(){
		$this->model_sequrity->getsequrity();
		$this->load->model('model_post');
		$key = $this->uri->segment(3);
		$this->db->where('id_post',$key);
		$query = $this->db->get('db_post');
		if($query->num_rows()>0){
			$this->model_post->getdelete($key);
		}
		redirect('post');
	}
}
?>