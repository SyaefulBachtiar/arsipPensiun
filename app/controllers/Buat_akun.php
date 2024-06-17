<?php 

class Buat_akun extends Controller {
    public function index(){
        $data['judul'] = "Buat Akun";
        $this->view('template/header', $data);
        $this->view('buat_akun/index');
        $this->view('template/footer');
    }
}