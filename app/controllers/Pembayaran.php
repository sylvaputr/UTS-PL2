<?php

class Pembayaran extends Controller {

    public function index(){
        $data['title'] = 'Data Pembayaran';
        $data['pembayaran'] = $this->model('Pembayaran_model')->getAllpembayaran();
        $this->view('pembayaran/index', $data);
    }

    public function edit($id){
        $data['title'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMhasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/edit', $data);
        $this->view('templates/header');
    }

    public function tambah(){
        $data['title'] = 'Tambah Pembayaran';  
        $data['petugas'] = $this->model('Petugas_model')->getAllpetugas();	
        $data['spp'] = $this->model('Spp_model')->getAllspp();	
        $this->view('pembayaran/tambah', $data);
    }

    public function simpan(){  
        $id_pembayaran     = $_POST['id_pembayaran'];
        $id_petugas    = $_POST['id_petugas'];
        $nisn = $_POST['nisn'];
        $tgl_bayar     = $_POST['tgl_bayar'];
        $bulan_dibayar    = $_POST['bulan_dibayar'];
        $tahun_dibayar = $_POST['tahun_dibayar'];
        $id_spp     = $_POST['id_spp'];
        $jumlah_bayar    = $_POST['jumlah_bayar'];
        $data['pembayaran'] = $this->model('Pembayaran_model')->tambahPembayaran($id_pembayaran,$id_petugas,$nisn,$tgl_bayar,$bulan_dibayar,$tahun_dibayar,$id_spp,$jumlah_bayar);
        $this->view('pembayaran/index', $data);
    }

    public function updateMahasiswa(){  
        $nim     = $_POST['nim'];
        $nama    = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $data['mhs'] = $this->model('Mahasiswa_model')->updateMahasiswa($nim,$nama,$jurusan);
        // return $this->index();
        header('location:../mahasiswa');
    }

    public function hapus($id){
        $data['mhs'] = $this->model('Mahasiswa_model')->deleteMhs($id);
        // return $this->index();
        header('location:../../mahasiswa');
    }
}
