<?php

class Dashboard_calonpensiun extends Controller {
    public function index($nip) {
            
            $data['judul'] = 'Dashboard Calon Pensiun';
            $data['cp']    = $this->model('Calon_Pensiunan')->getIdRelation($nip);
            $this->view('template/header', $data);
            $this->view('dashboard_calonpensiun/index', $data);
            $this->view('template/footer');


    }
}
