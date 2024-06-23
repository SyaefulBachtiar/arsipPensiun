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
            $nipcp = $this->model('Calon_Pensiunan')->getIdRelation($nip);
;
            if($nip === 'admin' && $password === '123'){
                Flasher::setFlash('berhasil!', 'Login sebagai admin', 'success');
                header('Location:'. BASEURL . '/Dashboard_admin');
                exit;

            }elseif ($nip === $nipcp['nip'] && $password === '123') {
                Flasher::setFlash('berhasil!', 'Login sebagai calon pensiun', 'success');
                header('Location:'. BASEURL . '/Dashboard_calonpensiun/index/'. $nip);
                exit;

            } else {
                Flasher::setFlash('gagal!', 'Login', 'danger');
                header('Location:'. BASEURL . '/Login');
            }
            
        }
    }

 
 

}