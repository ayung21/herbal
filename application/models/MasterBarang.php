<?php

class MasterBarang extends CI_Model{

    protected $table = 'tbm_barang';
    protected $table_view = 'tbv_barang';

    public function getAllDataBarang(){
        return $this->db->get($this->table_view)->result();
    }
}