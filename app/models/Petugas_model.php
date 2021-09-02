<?php

class Petugas_model {
  
    private $table = 'petugas';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllpetugas() {
        $this->db->query('SELECT * FROM petugas');
        return $this->db->resultSet();
    }

    public function getAllMhasiswaById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function tambahPetugas($id_petugas, $username, $password, $nama_petugas, $level) {
        $this->db->query('INSERT INTO petugas (id_petugas, username, password, nama_petugas, level) VALUES(:id_petugas, :username, :password, :nama_petugas,)');
        $this->db->bind('id_petugas',$id_petugas);
        $this->db->bind('username',$username);
        $this->db->bind('password',$password);
        $this->db->bind('nama_petugas',$nama_petugas);
        $this->db->bind('level',$level);
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
