<?php

class Transaksi extends CI_Model
{

    protected $table = 'tbt_transkasi';
    protected $table_view = 'tbv_transaksi';

    public function getAllDataToko($limit, $start){
        $this->db->order_by('rand()');
        $this->db->limit($limit, $start);
        return $this->db->get($this->table_view)->result();
    }

    public function getTotakllAllDataToko(){
        return $this->db->get($this->table_view)->num_rows();
    }

    public function getDataToko(){
        return $this->db->query("
            SELECT *
            FROM ".$this->table_view."
            WHERE id_user = ".$this->db->escape(user()->id_user)."
        ")->result();
    }

    public function getDetailBarang($id){
        return $this->db->query("
            SELECT *
            FROM ".$this->table_view."
            WHERE id_transaksi = ".$this->db->escape($id)."
        ")->row();
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

    public function prosesDeleteDataToko($id){
        $data = array(
            'deleted_by'    => user()->id_user,
            'date_deleted'  => date('Y-m-d H:i:s')
        );
        $this->db->where('id_transaksi', $id);
        return $this->db->update($this->table, $data);
    }
}
