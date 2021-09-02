<?php

class Petugas extends Controller {

    public function index(){
        $data['title'] = 'Data Kelas';
        $data['petugas'] = $this->model('Petugas_model')->getAllpetugas();
        $this->view('petugas/index', $data);
    }

    public function tambah(){
        $data['title'] = 'Tambah Petugas'; 	 
        $this->view('petugas/tambah', $data);
    }

    public function simpan(){  
        $id_petugas      = $_POST['id_petugas'];
        $username        = $_POST['username'];
        $password        = $_POST['password'];
        $nama_petugas    = $_POST['nama_petugas'];
        $level           = $_POST['level'];
        $data['petugas'] = $this->model('Petugas_model')->tambahPetugas($id_petugas,$username,$password,$nama_petugas,$level);
        $this->view('petugas/index', $data);
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
