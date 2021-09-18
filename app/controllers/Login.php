<?php

class Login extends Controller
{

    public function index()
    {
        $this->view('index');
    }

    public function login()
    {
        if($row = $this->model('Petugas_Model')->loginPetugas($_POST) > 0 ) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['session_login'] = 'sudah_login'; 
            echo 'Login Berhasil';
            $this->view('home');
        } else {
            echo 'Login Gagal';
            $this->view('login/index');
            exit;	
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        Flasher::setFlash('Selamat', 'Akun anda berhasil keluar', 'success');
        header('Location: ' . BASEURL);
        exit;
    }
}
