<?php

class Dashboard_calonpensiun extends Controller {
    public function index() {
        var_dump($_SESSION);
        // Ambil data dari session
        $nip = $_SESSION['nip'] ?? null;
        $id_anggota_keluarga = $_SESSION['id_anggota_keluarga'] ?? null;
        $id_riwayatpkerjaan = $_SESSION['id_riwayatpkerjaan'] ?? null;

        // Pastikan data tersedia sebelum digunakan
        if ($nip && $id_anggota_keluarga && $id_riwayatpkerjaan) {
            $data['judul'] = 'Dashboard Calon Pensiun';
            $data['dk']    = $this->model('Calon_Pensiunan')->getAll_daftarkeluarga($id_anggota_keluarga);
            $data['cp']    = $this->model('Calon_Pensiunan')->getAllcp($nip);
            $data['rp']    = $this->model('Calon_Pensiunan')->getAll_riwayatPekerjaan($id_riwayatpkerjaan);

            $this->view('template/header', $data);
            $this->view('dashboard_calonpensiun/index', $data);
            $this->view('template/footer');
        } else {
            // Handle jika salah satu data tidak tersedia
            echo "Data tidak lengkap atau tidak tersedia.";
        }
    }
}
