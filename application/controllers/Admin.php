<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{	
		$this->model_sequrity->getsequrity();
		$isi['content']	= 'manage_admin';
		$isi['data']	= $this->db->get('admin');
		$this->load->view('tampilan_home',$isi);

	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect ('tampilan_login');
	}
	public function edite(){
		$this->model_sequrity->getsequrity();
		$data['content']= 'tampil_edit';
		$key = $this->uri->segment(3);
		$this->db->where('id_username',$key);
		$query = $this->db->get('admin');
		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$data['id_username']	=$row->id_username;
				$data['username']	=$row->username;
				$data['email']	=$row->email;
				$data['password']	=$row->password;
			}
		}
		else{
				$data['id_username']	='';
				$data['username']	='';
				$data['email']	='';
				$data['password']	='';
		}
		$this->load->view('tampilan_home',$data);
	}
	public function create(){
		$this->model_sequrity->getsequrity();
		$key = $this->input->post('id_username');
		$data['username']	= $this->input->post('nama');
		$data['email']	= $this->input->post('email');
		$data['password'] = $this->input->post('password');
		$this->load->model('model_admin');
		$query =$this->model_admin->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_admin->getupdate($key,$data);
			$this->session->set_flashdata('info','data berhasil disimpan');
		}
		else{
			$this->model_admin->getinsert($data);
			$this->session->set_flashdata('info','data berhasil disimpan');
		}
		redirect('admin');
	}
	
	public function delete(){
		$this->model_sequrity->getsequrity();
		$this->load->model('model_admin');
		$key = $this->uri->segment(3);
		$this->db->where('id_username',$key);
		$query = $this->db->get('admin');
		if($query->num_rows()>0){
			$this->model_admin->getdelete($key);
		}
		redirect('admin');
	}
}
?>
