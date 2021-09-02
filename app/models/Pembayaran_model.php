<?php

class Pembayaran_model {
  
    private $table = 'pembayaran';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllpembayaran() {
        $this->db->query('SELECT *
        FROM pembayaran
        INNER JOIN petugas on petugas.id_petugas = pembayaran.id_petugas
        INNER JOIN spp on spp.id_spp = pembayaran.id_spp
        ORDER BY id_pembayaran ASC');
        return $this->db->resultSet();
    }

    public function getAllMhasiswaById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function tambahMahasiswa($nim, $nama, $jurusan) {
        $this->db->query('INSERT INTO ' . $this->table . '(nim, nama, jurusan) VALUES(:nim, :nama, :jurusan)');
        $this->db->bind('nim',$nim);
        $this->db->bind('nama',$nama);
        $this->db->bind('jurusan',$jurusan);
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
