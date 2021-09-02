<?php

class Kelas_model {
  
    private $table = 'kelas';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllkelas() {
        $this->db->query('SELECT * FROM kelas');
        return $this->db->resultSet();
    }

    public function getAllMhasiswaById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function tambahKelas($id_kelas, $nama_kelas, $kompetensi_keahlian) {
        $this->db->query('INSERT INTO kelas (id_kelas, nama_kelas, kompetensi_keahlian) VALUES(:id_kelas, :nama_kelas, :kompetensi_keahlian)');
        $this->db->bind('id_kelas',$id_kelas);
        $this->db->bind('nama_kelas',$nama_kelas);
        $this->db->bind('kompetensi_keahlian',$kompetensi_keahlian);
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
