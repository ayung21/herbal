<?php

class MasterUser extends CI_Model
{

    protected $table = 'tbm_user';
    // protected $table_view = 'tbv_barang';

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

    public function getIdToko($id){
        return $this->db->query("
            SELECT * 
            FROM ".$this->table."
            WHERE id_user = ".$this->db->escape($id)."
        ")->row();
    }
}
