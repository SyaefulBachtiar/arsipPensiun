<?php

class Login extends Controller{

    // menghungkan ke halaman login
    public function index(){

        $data['judul'] = 'Login';
        $this->view('template/header', $data);
        $this->view('login/index');
        $this->view('template/footer');
    }

    public function proses() {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nip = $_POST['nip'];
            $password = $_POST['password'];

            if($nip === 'admin' && $password === '123'){
                Flasher::setFlash('berhasil!', 'Login sebagai admin', 'success');
                header('Location:'. BASEURL . '/dashboard_admin');
                exit;
            }elseif ($nip === 'user' && $password === '123') {
                Flasher::setFlash('berhasil!', 'Login sebagai calon pensiun', 'success');
                header('Location:'. BASEURL . '/dashboard_calonpensiun');
            } else {
                Flasher::setFlash('berhasil!', 'Login', 'danger');
                header('Location:'. BASEURL . '/login' .'/index');
            }
            
        }
    }

 
 

}