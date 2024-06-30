<?php

class Detail extends Controller {
    public function index($nip){

       
        $data['judul'] = 'Detail Data Calon Pensiun';
        $data['cp'] = $this->model('Calon_Pensiunan')->getIdRelation($nip);
        $this->view('template/header', $data);
        $this->view('detail/index', $data);
        $this->view('template/footer');
    }

    public function setujui($id_riwayatpkerjaan){
        if($this->model('Calon_Pensiunan')->ubah_status($id_riwayatpkerjaan) > 0){
            Flasher::setFlash('berhasil!', 'disetujui', 'success');
            header('Location:'. BASEURL . '/Detail/index/'. $_SESSION['nip']);
            exit;   
        }else{
            Flasher::setFlash('gagal!', 'disetujui', 'danger');
            header('Location:'. BASEURL . '/Detail/index/'. $_SESSION['nip']);
            exit; 
        }
        header("Location:". BASEURL . "/Detail");
    }
}