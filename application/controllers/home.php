<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{	
		$this->model_sequrity->getsequrity();
		$isi['content']= 'tampilan_content';
		$this->load->view('tampilan_home',$isi);

	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect ('login');
	}


}
?>
