<?php

class MasterKota extends CI_Model
{

    protected $table = 'tbm_kota';
    protected $table_view = 'tbv_kota';

    public function getAllDataKota()
    {
        return $this->db->get($this->table_view)->result();
    }

    public function prosesCreateKota($args)
    {
        $data = array(
            'kota'       => $args['kota'],
            // 'created_by' => user()->is_user,
        );
        return $this->db->insert($this->table, $data);
    }

    public function deleteKota($id)
    {
        $data = array(
            // 'delete_by'     => user()->id_user,
            'deleted_by'    => 1,
            'date_deleted'  => date('Y-m-d H:i:s')
        );
        $this->db->where('id_kota', $id);
        return $this->db->update($this->table, $data);
    }

    public function getDataIdKota($id){
        return $this->db->query("
            SELECT * 
            FROM ".$this->table_view."
            WHERE id_kota = ".$this->db->escape($id)."
        ")->row();
    }

    public function prosesUpdateKota($args){
        $data = array(
            'kota'  => $args['kota']
        );
        $this->db->where('id_kota', $args['id_kota']);
        return $this->db->update($this->table, $data);
    }
}
