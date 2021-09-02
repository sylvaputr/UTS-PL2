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

    public function tambahPembayaran($id_pembayaran, $id_petugas, $nisn, $tgl_bayar, $bulan_dibayar, $tahun_dibayar, $id_spp, $jumlah_bayar) {
        $this->db->query('INSERT INTO ' . $this->table . '(id_pembayaran, id_petugas, nisn, tgl_bayar, bulan_dibayar, tahun_dibayar, id_spp, jumlah_bayar) VALUES(:id_pembayaran, :id_petugas, :nisn, :tgl_bayar, :bulan_dibayar, :tahun_dibayar, :id_spp, :jumlah_bayar)');
        $this->db->bind('id_pembayaran',$id_pembayaran);
        $this->db->bind('id_petugas',$id_petugas);
        $this->db->bind('nisn',$nisn);
        $this->db->bind('id_pembayaran',$id_pembayaran);
        $this->db->bind('id_petugas',$id_petugas);
        $this->db->bind('nisn',$nisn);
        $this->db->bind('id_pembayaran',$id_pembayaran);
        $this->db->bind('id_petugas',$id_petugas);
        $this->db->bind('nisn',$nisn);
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
