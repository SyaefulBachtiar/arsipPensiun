<?php

class Tambahdata_baru extends Controller {
    public function index(){

        $data['judul'] = 'Tambah Data Calon Pensiun';
        $this->view('template/header', $data);
        $this->view('tambahdata_baru/index', $data);
        $this->view('template/footer');


    }
}