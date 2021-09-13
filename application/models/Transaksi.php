<?php

class Transaksi extends CI_Model
{

    protected $table = 'tbt_transkasi';
    protected $table_view = 'tbv_transaksi';

    public function getDataToko(){
        return $this->db->query("
            SELECT *
            FROM ".$this->table_view."
            WHERE id_user = ".$this->db->escape(user()->id_user)."
        ")->result();
    }
}
