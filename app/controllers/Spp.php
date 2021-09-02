<?php

class Spp extends Controller {

    public function index(){
        $data['title'] = 'Data Kelas';
        $data['spp'] = $this->model('Spp_model')->getAllspp();
        $this->view('spp/index', $data);
    }

    public function tambah(){
        $data['title'] = 'Tambah Spp';  
        $this->view('spp/tambah', $data);
    }

    public function simpan(){  
        $id_spp     = $_POST['id_spp'];
        $tahun      = $_POST['tahun'];
        $nominal    = $_POST['nominal'];
        $data['spp'] = $this->model('Spp_model')->tambahSpp($id_spp, $tahun, $nominal);
        $this->view('spp/index', $data);
    }

    public function edit($id){
        $data['title'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMhasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/edit', $data);
        $this->view('templates/header');
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
