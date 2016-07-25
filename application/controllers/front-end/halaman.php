<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {
	 function __construct()
    {
        parent::__construct();
        $this->load->model('model_cari');
         
    }
	public function index()
    {
        
        $judul         =   $this->input->get('judul');
        $data['results']    =   $this->model_cari->cari($judul);

        $this->load->view('front-end/Pencarian',$data);
    
        //}
 
    }
    public function page_not_found()
    {

        $this->load->view('errors/html/error_404');
    
        //}
 
    }


}
?>