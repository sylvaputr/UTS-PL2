<?php

class Home extends Controller {

    public function index()
    {
        $this->view('login/index');
    }

    public function beranda()
    {
        $this->view('home');
    }

}