<?php

class Login extends Controller{

    // menghungkan ke halaman login
    public function index(){

        $data['judul'] = 'Login';
        $this->view('template/header', $data);
        $this->view('login/index');
        $this->view('template/footer');
    }

 
 

}