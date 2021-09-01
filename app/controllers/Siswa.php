<?php

class Siswa extends Controller {

    public function index(){
        $data['title'] = 'Data Siswa';
        $data['siswa'] = $this->model('Siswa_model')->getAllsiswa();
        $this->view('siswa/index', $data);
    }

    public function detail($id){
        $data['title'] = 'Detail Siswa';
        $data['siswa'] = $this->model('Siswa_model')->getAllsiswaById($id);
        $this->view('siswa', $data);
    }

    public function edit($id){

    $data['title'] = 'Detail Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getAllMhasiswaById($id);
    $this->view('templates/header', $data);
    $this->view('mahasiswa/edit', $data);
    $this->view('templates/header');
    }

    public function tambah(){
    $data['title'] = 'Tambah Mahasiswa';  
    $this->view('templates/header', $data);
    $this->view('mahasiswa/tambah');
    $this->view('templates/header');
    }

    public function simpanmahasiswa(){  
    $nim     = $_POST['nim'];
    $nama    = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $data['mhs'] = $this->model('Mahasiswa_model')->tambahMahasiswa($nim,$nama,$jurusan);
    // return $this->index();
    header('location:../mahasiswa');
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
