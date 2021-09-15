<?php

class MasterUser extends CI_Model
{

    protected $table = 'tbm_user';
    protected $table_view_toko = 'tbv_toko';

    public function insertUser($args)
    {
        $data = array(
            'email'    => $args['email'],
            'no_hp'    => $args['telp'],
            'password' => password_hash($args['password'], PASSWORD_DEFAULT)
        );
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function getIdToko($id)
    {
        return $this->db->query("
            SELECT * 
            FROM " . $this->table . "
            LEFT JOIN tbm_image img ON(img.fk_user = ".$this->table.".id_user)
            WHERE id_user = " . $this->db->escape($id) . "
            AND img.fk_transaksi is NULL
        ")->row();
    }

    public function getAllToko()
    {
        return $this->db->get($this->table_view_toko)->result();
    }

    public function getValidasiToko($id)
    {
        $data = array(
            'status'    => 1
        );
        $this->db->where('id_user', $id);
        return $this->db->update($this->table, $data);
    }

    public function cekLoginEmail($args){
        return $this->db->query("
            SELECT * 
            FROM ".$this->table."
            WHERE email = ".$this->db->escape($args['email'])."
        ");
    }

    public function updateDataToko($args){
        $data = array(
            'nama_toko' => $args['toko'],
            'alamat'    => $args['alamat'],
            'fk_kota'   => $args['kota'],
            'email'     => $args['email'],
            'no_hp'     => $args['handphone']
        );
        $this->db->where('id_user', user()->id_user);
        return $this->db->update($this->table, $data);
    }
}
