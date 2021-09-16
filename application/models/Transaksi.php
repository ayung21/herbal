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

    public function insertBarangToko($args){
        $data = array(
            'fk_user'   => user()->id_user,
            'fk_barang' => $args['barang'],
            'harga'     => $args['harga'],
            'diskon'    => !empty($args['diskon']) ? $args['diskon'] : null
        );
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function prosesGetTransaksi($id){
        return $this->db->query("
            select tt.*,ti.image_name 
            from ".$this->table." tt 
            left join tbm_image ti ON(ti.fk_transaksi = tt.id_transaksi)
            WHERE tt.id_transaksi = ".$this->db->escape($id)."
            and ti.fk_user is NULL
        ")->row();
    }

    public function updateBarangToko($args){
        $data = array(
            'fk_barang' => $args['barang'],
            'harga'     => $args['harga'],
            'diskon'    => !empty($args['diskon']) ? $args['diskon'] : null
        );
        $this->db->where('id_transaksi', $args['id_transaksi']);
        return $this->db->update($this->table, $data);
        
    }
}
