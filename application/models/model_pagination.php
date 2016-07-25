<?php
 class Model_pagination extends CI_Model  {
function Model_pagination()
{
parent::__construct();
}
function getData($perPage,$uri) { //to get all data in tb_book
$this->db->select('*');
$this->db->from('db_post');
$this->db->order_by('id_post','DESC');
$getData = $this->db->get('', $perPage, $uri);
if($getData->num_rows() > 0)
return $getData->result_array();
else
return null;
}
function getArtikel($perPage,$uri) { //to get all data in tb_book
$this->db->select('*');
$this->db->from('db_post');
$this->db->order_by('id_post','ASC');
$getData = $this->db->get('', $perPage, $uri);
if($getData->num_rows() > 0)
return $getData->result_array();
else
return null;
}
 }

?>