<?php 

class Data_daftarKeluarga extends Controller {


    public function index(){

        $data['judul'] = 'Input Daftar Keluarga';
        $this->view('template/header', $data);
        $this->view('daftar_anggota_keluarga/index');
        $this->view('template/footer');
    } 

    public function read_saved_daftarKeluarga(){
        if( $this->model('Calon_Pensiunan')->input_daftarKeluarga($_POST) > 0){
                Flasher::setFlash('berhasil!', 'ditambahkan', 'success');
                header('Location:'. BASEURL . '/Dashboard_calonpensiun');
                exit;
            }else{
                Flasher::setFlash('gagal!', 'ditambahkan', 'danger');
                header('Location:'. BASEURL . '/Dashboard_calonpensiun');
                exit;
            }
        }
}