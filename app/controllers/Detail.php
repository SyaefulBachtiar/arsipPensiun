<?php

class Detail extends Controller {
    public function index($nip){

        $data['judul'] = 'Detail Data Calon Pensiun';
        $data['cp'] = $this->model('Calon_Pensiunan')->getcpById($nip);
        $this->view('template/header', $data);
        $this->view('detail/index', $data);
        $this->view('template/footer');


    }
}