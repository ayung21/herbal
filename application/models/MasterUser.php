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
            WHERE id_user = " . $this->db->escape($id) . "
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
}
