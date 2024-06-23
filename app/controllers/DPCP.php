<?php

class DPCP extends Controller{


 
    public function index() {
        $data['judul'] = 'Data Calon Pensiun';
        $this->view('template/header', $data);
        $this->view('data_perorangan_calon_perorangan_calonpensiun/index');
        $this->view('template/footer');
    }

      // tambah 
      public function read_saved_dpcp(){
        if ( $this->model('Calon_Pensiunan')->input_dpcp($_POST) > 0 ){
            Flasher::setFlash('berhasil!', 'ditambahkan', 'success');
            header('Location:'. BASEURL . '/Dashboard_calonpensiun');
            exit;
        }else{
            Flasher::setFlash('gagal!', 'ditambahkan', 'danger');
            header('Location:'. BASEURL . '/Dashboard_calonpensiun');
        }
    }
    

     // hapus
     public function clear_dpcp($nip) {
        if($this->model('Calon_Pensiunan')->hapusDatacp($nip) > 0){
            header('Location:'. BASEURL . '/Dashboard');
            exit;
        }else{
            header('Location:'. BASEURL. '/Detail');
            exit;
        }
     }

 

}