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

    public function createTableTemporaryUpdatePartikel(){
        return $this->db->query("
            CREATE TEMPORARY TABLE updatepartikel(
                longitude VARCHAR(200),
                latitude VARCHAR(200),
                partikel int(11)
            )
        ");
    }
    
    public function createTableTemporaryPerhitungan(){
        return $this->db->query("
            CREATE TEMPORARY TABLE perhitungan(
                nama_toko VARCHAR(200),
                longitude VARCHAR(200),
                latitude VARCHAR(200),
                longitude_partikel VARCHAR(200),
                latitude_partikel VARCHAR(200),
                hasil VARCHAR(200),
                partikel int(11)
            )
        ");
    }
    
    public function createTableTemporaryHasil(){
        return $this->db->query("
            CREATE TEMPORARY TABLE hasilperhitungan(
                nama_toko VARCHAR(200),
                longitude VARCHAR(200),
                latitude VARCHAR(200),
                longitude_partikel VARCHAR(200),
                latitude_partikel VARCHAR(200),
                hasil VARCHAR(200),
                partikel int(11)
            )
        ");
    }

    public function selectPartikel(){
        return $this->db->query("
            SELECT * 
            FROM partikel
        ");
    }

    public function getDataHasilTerkecil($i){
        return $this->db->query("
            SELECT * 
            FROM perhitungan
            WHERE partikel = ".$i."
            ORDER BY hasil ASC
            LIMIT 1
        ")->row();
    }

    public function selectHasilPerhitungan(){
        return $this->db->query("
            SELECT * 
            FROM perhitungan
        ")->result();
    }

    public function selectHasilPerhitunganTerakhir(){
        return $this->db->query("
            SELECT * 
            FROM hasilperhitungan
        ")->result();
    }

    public function insertTemporaryPartikel($longitude,$latitude){
        $data = array(
            'longitude' => $longitude,
            'latitude'  => $latitude
        );
        return $this->db->insert('partikel', $data);
    }

    public function hasil_perhitungan($nama_toko,$latitude, $longitude,$parikel,$latitude_partikel,$longitude_partikel){
        $data = array(
            'nama_toko'           => $nama_toko,
            'longitude'           => $longitude,
            'latitude'            => $latitude,
            'longitude_partikel'  => $latitude_partikel,
            'latitude_partikel'   => $longitude_partikel,
            'hasil'               => round(sqrt($latitude + $longitude),6),
            'partikel'            => $parikel
        );
        return $this->db->insert('perhitungan', $data);
    }

    public function insertHasilPerPartikel($getHasil){
        $data = array(
            'nama_toko'           => $getHasil->nama_toko,
            'longitude'           => $getHasil->longitude,
            'latitude'            => $getHasil->latitude,
            'longitude_partikel'  => $getHasil->latitude_partikel,
            'latitude_partikel'   => $getHasil->longitude_partikel,
            'hasil'               => $getHasil->hasil,
            'partikel'            => $getHasil->partikel
        );
        return $this->db->insert('hasilperhitungan', $data);
    }

    

}
