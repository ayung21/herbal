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
            'password' => $args['password']
        );
        return $this->db->insert($this->table, $data);
    }
}
