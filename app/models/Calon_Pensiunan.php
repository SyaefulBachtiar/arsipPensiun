<?php 

class Calon_Pensiunan {
    private $db;
    

    public function __construct(){
        $this->db = new Database;
        
    }

    // read data
    public function getAllcp(){
        $this->db->query('SELECT * FROM tbl_data_cp');
        return $this->db->resultSet();
    }
    public function getAll_daftarkeluarga(){
        $this->db->query('SELECT * FROM tbl_daftarkeluarga');
        return $this->db->resultSet();
    }
    public function getAll_riwayatPekerjaan(){
        $this->db->query('SELECT * FROM tbl_riwayatpekerjaan');
        return $this->db->resultSet();
    }

    // get id
 
  

    
        // Mengambil data calon pensiunan berdasarkan nip
        public function getIdRelation($nip){
            $this->db->query("SELECT * FROM tbl_data_cp WHERE nip= :nip");
            $this->db->bind(':nip', $nip);
            $calon_pensiun = $this->db->single();
            
            if($calon_pensiun){
                // Mengambil daftar keluarga berdasarkan nip
                $this->db->query("SELECT * FROM tbl_daftarkeluarga WHERE nip_terkait = :nip");
                $this->db->bind(':nip', $nip);
                $calon_pensiun['daftar_keluarga'] = $this->db->resultSet();
    
                // Mengambil riwayat pekerjaan berdasarkan nip
                $this->db->query("SELECT * FROM tbl_riwayatpekerjaan WHERE nip_terkait = :nip");
                $this->db->bind(':nip', $nip);
                $calon_pensiun['riwayat_pekerjaan'] = $this->db->resultSet();
            }
    
            return $calon_pensiun;
        }
    


//    hapus
    public function hapusDatacp($nip){
        $query = ("DELETE FROM tbl_data_cp WHERE nip=:nip");
        $this->db->query($query);
        $this->db->bind('nip', $nip);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // input_dpcp
    public function input_dpcp($data){
        $query = "INSERT INTO tbl_data_cp VALUES (:nip, :nama, :lahir_tempat, :lahir_tgl, :gender, :status_kawin, :pendidikan_jenjang,:pendidikan_jurusan, :pendidikan_tahunlulus, :no_karpeg, :jabatan, :pangkat_gol_ruang, :tmt, :unit_organisasi,:masa_kerja_golongan_dlm_bulan, :masa_kerja_golongan_tgl, :masa_kerja_pensiun_dlm_bulan, :masa_kerja_pensiun_tgl,:masa_kerja_sebelum_pns_start, :masa_kerja_sebelum_pns_end, :gaji_pokok_terakhir, :tanggal_masuk_pns)";

        $this->db->query($query);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('lahir_tempat', $data['lahir_tempat']);
        $this->db->bind('lahir_tgl', $data['lahir_tgl']);
        $this->db->bind('gender', $data['gender']);
        $this->db->bind('status_kawin', $data['status_kawin']);
        $this->db->bind('pendidikan_jenjang', $data['pendidikan_jenjang']);
        $this->db->bind('pendidikan_jurusan', $data['pendidikan_jurusan']);
        $this->db->bind('pendidikan_tahunlulus', $data['pendidikan_tahunlulus']);
        $this->db->bind('no_karpeg', $data['no_karpeg']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('pangkat_gol_ruang', $data['pangkat_gol_ruang']);
        $this->db->bind('tmt', $data['tmt']);
        $this->db->bind('unit_organisasi', $data['unit_organisasi']);
        $this->db->bind('masa_kerja_golongan_dlm_bulan', $data['masa_kerja_golongan_dlm_bulan']);
        $this->db->bind('masa_kerja_golongan_tgl', $data['masa_kerja_golongan_tgl']);
        $this->db->bind('masa_kerja_pensiun_dlm_bulan', $data['masa_kerja_pensiun_dlm_bulan']);
        $this->db->bind('masa_kerja_pensiun_tgl', $data['masa_kerja_pensiun_tgl']);
        $this->db->bind('masa_kerja_sebelum_pns_start', $data['masa_kerja_sebelum_pns_start']);
        $this->db->bind('masa_kerja_sebelum_pns_end', $data['masa_kerja_sebelum_pns_end']);
        $this->db->bind('gaji_pokok_terakhir', $data['gaji_pokok_terakhir']);
        $this->db->bind('tanggal_masuk_pns', $data['tanggal_masuk_pns']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // input riwayat pekerjaan
    public function input_riwayatPekerjaan ($data){
        $query = "INSERT INTO tbl_riwayatpekerjaan VALUES (:id_riwayatpkerjaan, :nip_terkait, :uraian_riwayatpekerjaan, :mulai, :sampai, :pangkat_gol_ruang, :gaji, :sk_pejabat, :sk_nomor, :sk_tanggla)";


        $this->db->query($query);
        $this->db->bind('id_riwayatpkerjaan', $data['id_riwayatpkerjaan']);
        $this->db->bind('nip_terkait', $data['nip_terkait']);
        $this->db->bind('uraian_riwayatpekerjaan', $data['uraian_riwayatpekerjaan']);
        $this->db->bind('mulai', $data['mulai']);
        $this->db->bind('sampai', $data['sampai']);
        $this->db->bind('pangkat_gol_ruang', $data['pangkat_gol_ruang']);
        $this->db->bind('gaji', $data['gaji']);
        $this->db->bind('sk_pejabat', $data['sk_pejabat']);
        $this->db->bind('sk_nomor', $data['sk_nomor']);
        $this->db->bind('sk_tanggla', $data['sk_tanggla']);

        $this->db->execute();

        return $this->db->rowCount();
        
    }

    // input daftar keluarga
    public function input_daftarKeluarga($data){

        $query = "INSERT INTO tbl_daftarkeluarga VALUES (:id_anggota_keluarga, :nip_terkait, :nama, :hubungan_keluarga, :tanggal_lahir, :pekerjaan_sekolah, :tanggla_perkawinan, :keterangan)";

        $this->db->query($query);
        $this->db->bind('id_anggota_keluarga', $data['id_anggota_keluarga']);
        $this->db->bind('nip_terkait', $data['nip_terkait']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('hubungan_keluarga', $data['hubungan_keluarga']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind('pekerjaan_sekolah', $data['pekerjaan_sekolah']);
        $this->db->bind('tanggla_perkawinan', $data['tanggla_perkawinan']);
        $this->db->bind('keterangan', $data['keterangan']);

        $this->db->execute();

        return $this->db->rowCount();


    }







}