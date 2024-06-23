<?php 

class Data_riwayatPekerjaan extends Controller{

    public function index() {

        $data['judul'] = 'Data Riwayat Pekerjaan';
        $this->view('template/header', $data);
        $this->view('data_riwayat_pekerjaan/index');
        $this->view('template/footer');
    }



    public function read_saved_rp($nip){
        if( $this->model('Calon_Pensiunan')->input_riwayatPekerjaan($_POST) > 0){
            Flasher::setFlash('berhasil!', 'ditambahkan', 'success');
            $data = $this->model('Calon_Pensiunan')->getIdRelation($nip);
            header('Location:'. BASEURL . '/Dashboard_calonpensiun', $data);
            exit;
        }else{
            Flasher::setFlash('gagal!', 'ditambahkan', 'danger');
            header('Location:'. BASEURL . '/Dashboard_calonpensiun');
            exit;
        }
    }

}