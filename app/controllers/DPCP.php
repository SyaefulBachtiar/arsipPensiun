<?php

class DPCP extends Controller{


    // halaman utama dari Tambah Data
    public function index() {


        $data['judul'] = 'Data Calon Pensiun';
        $this->view('template/header', $data);
        $this->view('tambahData/index');
        $this->view('template/footer');
    }



    // menghubungkan ke halaman input dpcp
    public function input_dpcp(){

        $data['judul'] = 'Input Data Calon Pensiun';
        $this->view('template/header', $data);
        $this->view('tambahData/input_dpcp');
        $this->view('template/footer');


    }

    // detail caloon pensiun
    public function detail($nip){

        $data['judul'] = 'Detail Data Calon Pensiun';
        $data['cp'] = $this->model('Calon_Pensiunan')->getcpById($nip);
        $this->view('template/header', $data);
        $this->view('tambahData/detail', $data);
        $this->view('template/footer');


    }

      // tambah 
      public function read_saved_dpcp(){
        if ( $this->model('Calon_Pensiunan')->input_dpcp($_POST) > 0 ){
            header('Location:'. BASEURL. '/dashboard');
            exit;
        }
    }
    

     // hapus
     public function clear_dpcp($nip) {
        if($this->model('Calon_Pensiunan')->hapusDatacp($nip) > 0){
            header('Location:'. BASEURL . '/dashboard');
            exit;
        }else{
            header('Location:'. BASEURL. '/dashboard');
            exit;
        }
     }

 

}