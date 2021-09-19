<?php

class Home extends Controller {

    public function index()
    {
        if (!isset($_SESSION['is_login'])) {
            $this->view('login/index');
        } else {
            $this->view('home');
        }
        
    }

    public function beranda()
    {
        $this->view('home');
    }

}