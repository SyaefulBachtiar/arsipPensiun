<?php


class Dashboard_admin extends Controller{



    public function index(){

        $data['judul'] = 'Dashboard Admin';
        $data['cp'] = $this->model('Calon_Pensiunan')->getAllcp();
        $this->view('template/header', $data);
        $this->view('dashboard_admin/index', $data);
        $this->view('template/footer');
        
    }

}