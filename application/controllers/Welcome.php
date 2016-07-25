<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
  public function Welcome()
   {
   parent::__construct();
   $this->load->model('model_pagination');
   $this->load->library('pagination'); //call pagination library
   }
	public function getData()
	{	
      $this->db->select('*');
      $this->db->from('db_post');
      $getData = $this->db->get('');
      $a = $getData->num_rows();
      $config['base_url'] = base_url().'index.php/Welcome/getData/'; //set the base url for pagination
      $config['total_rows'] = $a; //total rows
      $config['per_page'] = '9'; //the number of per page for pagination
      $config['uri_segment'] = 3; //see from base_url. 3 for this case
     // $config['display_pages'] = FALSE;
      $config['next_link'] = 'Next';
      $config['prev_link'] = 'Prev';
      $config['cur_tag_open'] = '<a style="background-color:#34a1e9;color:white" href="'.base_url().$this->uri->uri_string().'">';
      $config['cur_tag_close'] = '</a>';
      $config['full_tag_open'] = '<li>';
      $config['full_tag_close'] = '</li>';
      $this->pagination->initialize($config); //initialize pagination
      $data['judul'] = 'menampilkan isi Data';
      $data['results'] = $this->model_pagination->getData($config['per_page'],$this->uri->segment(3));
      $this->load->view('front-end/HelloToms', $data);
}
   public function about()
   {  
      $this->db->select('*');
      $this->db->from('db_post');
      $getData = $this->db->get('');
      $a = $getData->num_rows();
      $config['per_page'] = '4';
      $data['results'] = $this->model_pagination->getData($config['per_page'],$this->uri->segment(3));
      $data['artikel_lainnya'] = $this->model_pagination->getArtikel($config['per_page'],$this->uri->segment(3));
      $this->load->view('front-end/about',$data);
}
 public function contact()
   {  
      $this->db->select('*');
      $this->db->from('db_post');
      $getData = $this->db->get('');
      $a = $getData->num_rows();
      $config['per_page'] = '4';
      $data['results'] = $this->model_pagination->getData($config['per_page'],$this->uri->segment(3));
      $data['artikel_lainnya'] = $this->model_pagination->getArtikel($config['per_page'],$this->uri->segment(3));
      $this->load->view('front-end/contact',$data);
}
  public function getArtikel(){
      $isi['content']   = 'front-end/halaman';
      $isi['datas']   = $this->db->get('db_post');
      $key = $this->uri->segment(3);
      $this->db->where('id_post',$key);
      $query =$this->db->get('db_post');
      if($query->num_rows()>0){
         foreach ($query->result() as $row) {
            $isi['id_post']   =$row->id_post;
            $isi['judul']  =$row->judul;
            $isi['tag']    =$row->tag;
            $isi['tanggal']      =$row->tanggal;
            $isi['gambar']    =$row->gambar;
            $isi['descr']  =$row->descr;  
         }
      }
      else{
            $isi['judul']  ='';
            $isi['tag']    ='';
            $isi['tanggal']  ='';
            $isi['descr']  =''; 
      }
     
      $this->load->view('front-end/halaman',$isi);
   }
}
?>
