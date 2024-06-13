<?php 

class data_daftarKeluarga extends Controller {
    public function input_daftarKeluarga(){

        $data['judul'] = 'Input Daftar Keluarga';
        $this->view('template/header', $data);
        $this->view('tambahData/input_daftarKeluarga');
        $this->view('template/footer');
    } 

    public function read_saved_daftarKeluarga(){
        if( $this->model('Calon_Pensiunan')->input_daftarKeluarga($_POST) > 0){
            header('Location:'. BASEURL . '/dashboard');
            exit;
        }
    }
}