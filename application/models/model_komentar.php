<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_komentar extends CI_Model {

    function getKomentar(){
    $this->db->select('*'); //memeilih semua field
    $this->db->from('komentar'); //memeilih tabel transaksi
    $this->db->join('db_post', 'db_post.judul = komentar.judul '   ); //join tabel transaksi field id_pemilik dengan tabel pemilik field yang punya isi sama
    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
                # code...
                $hasilKomentar[] = $data;
            }
        return $hasilKomentar; //hasil dari semua proses ada dimari
        }
    }
    function getKomentarUser(){
    $this->db->select('*'); //memeilih semua field
    $this->db->from('komentar'); //memeilih tabel transaksi
    $this->db->join('db_post', 'db_post.judul = komentar.judul ');
    $this->db->where(array('db_post.judul' => "joss")); 
   //join tabel transaksi field id_pemilik dengan tabel pemilik field yang punya isi sama
    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
                # code...
                $hasilKomentar[] = $data;
            }
        return $hasilKomentar; //hasil dari semua proses ada dimari
        }
    }

    public function getdelete($key){
        $this->db->where('id_komentar',$key);
        $this->db->delete('komentar');
    }
    public function getinsert($data)
    {   
        $this->db->insert('komentar',$data);
        
    }
}
?>