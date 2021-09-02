<?php

class Spp_model {
  
    private $table = 'spp';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllspp() {
        $this->db->query('SELECT * FROM spp');
        return $this->db->resultSet();
    }

    public function getAllMhasiswaById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function tambahSpp($id_spp, $tahun, $nominal) {
        $this->db->query('INSERT INTO spp (id_spp, tahun, nominal) VALUES(:id_spp, :tahun, :nominal)');
        $this->db->bind('id_spp',$id_spp);
        $this->db->bind('tahun',$tahun);
        $this->db->bind('nominal',$nominal);
        $this->db->execute();
    }

    public function updateMahasiswa($nim, $nama, $jurusan) {
        $this->db->query('UPDATE ' . $this->table . ' SET nama=:nama, jurusan=:jurusan WHERE nim=:nim');
        $this->db->bind('nim',$nim);
        $this->db->bind('nama',$nama);
        $this->db->bind('jurusan',$jurusan);
        $this->db->execute();
    }

    public function deleteMhs($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        $this->db->execute();
    }

    }
