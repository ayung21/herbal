<?php

class MasterBarang extends CI_Model{

    protected $table = 'tbm_barang';
    protected $table_view = 'tbv_barang';

    public function getAllDataBarang(){
        return $this->db->get($this->table_view)->result();
    }

    public function prosesCreateBarang($args)
    {
        $data = array(
            'nama_barang'       => $args['barang'],
            // 'created_by' => user()->is_user,
        );
        return $this->db->insert($this->table, $data);
    }

    public function deleteBarang($id){
        $data = array(
            // 'delete_by'     => user()->id_user,
            'deleted_by'    => 1,
            'date_deleted'  => date('Y-m-d H:i:s')
        );
        $this->db->where('id_barang', $id);
        return $this->db->update($this->table, $data);
    }

    public function getDataIdBarang($id){
        return $this->db->query("
            SELECT * 
            FROM ".$this->table_view."
            WHERE id_barang = ".$this->db->escape($id)."
        ")->row();
    }

    public function prosesUpdateBarang($args){
        $data = array(
            'nama_barang'  => $args['nama_barang']
        );
        $this->db->where('id_barang', $args['id_barang']);
        return $this->db->update($this->table, $data);
    }
}