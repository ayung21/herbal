<?php

class MasterKota extends CI_Model{

    protected $table = 'tbm_kota';
    protected $table_view = 'tbv_kota';

    public function getAllDataKota(){
        return $this->db->get($this->table_view)->result();
    }
}