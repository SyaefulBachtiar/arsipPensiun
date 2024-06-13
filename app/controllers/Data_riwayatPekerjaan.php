<?php 

class data_riwayatPekerjaan extends Controller{

    public function data_riwayatPekerjaan() {

        $data['judul'] = 'Data Riwayat Pekerjaan';
        $this->view('template/header', $data);
        $this->view('tambahData/data_riwayatPekerjaan');
        $this->view('template/footer');
    }



    public function read_saved_rp(){
        if( $this->model('Calon_Pensiunan')->input_riwayatPekerjaan($_POST) > 0){
            header('Location:'. BASEURL . '/dashboard');
            exit;
        }
    }

}