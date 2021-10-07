<?php

class TableTemporary extends CI_Model
{

    public function createTableTemporaryPartikel(){
        return $this->db->query("
            CREATE TEMPORARY TABLE partikel(
                longitude VARCHAR(200),
                latitude VARCHAR(200)
            )
        ");
    }

    public function selectPartikel(){
        return $this->db->query("
            SELECT * 
            FROM partikel
        ")->result();
    }

    public function insertTemporaryPartikel($longitude,$latitude){
        $data = array(
            'longitude' => $longitude,
            'latitude'  => $latitude
        );
        return $this->db->insert('partikel', $data);
    }

}
