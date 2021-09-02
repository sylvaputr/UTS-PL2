<?php

class Siswa extends Controller {

    public function index(){
        $data['title'] = 'Data Siswa';
        $data['siswa'] = $this->model('Siswa_model')->getAllsiswa();
        $this->view('siswa/index', $data);
    }

    public function tambah(){
        $data['title'] = 'Tambah Siswa';  
        $this->view('siswa/tambah', $data);
    }

    public function simpan(){  
        $nisn       = $_POST['nisn'];
        $nis        = $_POST['nis'];
        $nama       = $_POST['nama'];
        $id_kelas   = $_POST['id_kelas'];
        $alamat     = $_POST['alamat'];
        $no_telp    = $_POST['no_telp'];
        $id_spp     = $_POST['id_spp'];

        $data['siswa'] = $this->model('Siswa_model')->tambahMahasiswa($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp);
        // return $this->index();
        $this->view('siswa/index', $data);
    }

    public function edit($id){
        $data['title'] = 'Detail Mahasiswa';
        $data['siswa'] = $this->model('Siswa_model')->getAllMhasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/edit', $data);
        $this->view('templates/header');
    }

    public function updateMahasiswa(){  
        $nim     = $_POST['nim'];
        $nama    = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $data['siswa'] = $this->model('Siswa_model')->updateMahasiswa($nim,$nama,$jurusan);
        // return $this->index();
        header('location:../mahasiswa');
    }

    public function hapus($id){
        $data['siswa'] = $this->model('Siswa_model')->deletesiswa($id);
        // return $this->index();
        header('location:../../mahasiswa');
    }
}
