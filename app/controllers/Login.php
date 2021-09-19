<?php

class Login extends Controller
{

    public function index()
    {
        $this->view('login/index');
    }

    public function login()
    {

        if (isset($_POST['username']) && isset($_POST['password'])) {
            $USER = $this->model('Petugas_model')->loginPetugas($_POST['username'], $_POST['password']);
            if ($USER) {
                $_SESSION['id_petugas'] = $USER['id_petugas'];
                $_SESSION['nama_petugas'] = $USER['nama_petugas'];
                $_SESSION['level'] = $USER['level'];
                $_SESSION['is_login'] = TRUE;
                echo '<script language="javascript">';
                echo 'alert("Login Berhasil")';
                echo '</script>';
                $this->view('home');
                exit; 
            } else {
                echo '<script language="javascript">';
                echo 'alert("Login Gagal")';
                echo '</script>';
                $this->view('Login/index');
                exit;
            }
        }
        
    }

    public function logout()
    {
        session_destroy();
		echo "<script> location.href='index'; </script>";
        exit;
    }
}
