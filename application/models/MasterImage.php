<?php

class MasterImage extends CI_Model
{

    protected $table = 'tbm_image';
    // protected $table_view = 'tbv_transaksi';

    public function insertImage($args){

        if(!empty($args['file_asli'])){
            $this->db->where('image_name', $args['file_asli']);
            $this->db->delete($this->table);
        }

        $data = array(
            'image_name'    => $args['file_temp'],
            'fk_transaksi'  => null,
            'fk_user'       => user()->id_user
        );
        return $this->db->insert($this->table, $data);
    }

    public function insertImageBarangToko($args, $id){
        $data = array(
            'image_name'    => $args['file_temp'],
            'fk_transaksi'  => $id,
            'fk_user'       => null
        );
        return $this->db->insert($this->table, $data);
    }

    public function updateImageBarangToko($args){
        if(!empty($args['file_asli'])){
            $this->db->where('image_name', $args['file_asli']);
            $this->db->delete($this->table);
        }

        $data = array(
            'image_name'    => $args['file_temp'],
            'fk_transaksi'  => $args['id_transaksi'],
            'fk_user'       => null
        );
        return $this->db->insert($this->table, $data);
    }
}
