<?php

class Kelas extends Controller {

    public function index(){
        $data['title'] = 'Data Kelas';
        $data['kelas'] = $this->model('Kelas_model')->getAllkelas();
        $this->view('kelas/index', $data);
    }

    public function tambah(){
        $data['title'] = 'Tambah Siswa';  
        $this->view('kelas/tambah', $data);
    }

    public function simpan(){  
        $id_kelas                  = $_POST['id_kelas'];
        $nama_kelas                = $_POST['nama_kelas'];
        $kompetensi_keahlian       = $_POST['kompetensi_keahlian'];

        $data['kelas'] = $this->model('Kelas_model')->tambahKelas($id_kelas, $nama_kelas, $kompetensi_keahlian);
        $this->view('kelas/index', $data);
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
