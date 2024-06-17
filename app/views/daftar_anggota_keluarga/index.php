

<div class="container">
    <h1>Form Daftar Keluarga</h1>
    <form action="<?= BASEURL ?>/data_daftarkeluarga/read_saved_daftarKeluarga" method="POST">
      <div class="row mb-3">
        <div class="col-md-6">
          <label for="id_anggota_keluarga" class="form-label">ID Anggota Keluarga</label>
          <input required type="text" class="form-control" id="id_anggota_keluarga" name="id_anggota_keluarga">
        </div>
        <div class="col-md-6">
          <label for="nip_terkait" class="form-label">NIP Terkait</label>
          <input required type="text" class="form-control" id="nip_terkait" name="nip_terkait">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-md-6">
          <label for="nama" class="form-label">Nama</label>
          <input required type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="col-md-6">
          <label for="hubungan_keluarga" class="form-label">Hubungan Keluarga</label>
          <input required type="text" class="form-control" id="hubungan_keluarga" name="hubungan_keluarga">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-md-6">
          <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
          <input required type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
        </div>
        <div class="col-md-6">
          <label for="pekerjaan_sekolah" class="form-label">Pekerjaan/Sekolah</label>
          <input required type="text" class="form-control" id="pekerjaan_sekolah" name="pekerjaan_sekolah">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-md-6">
          <label for="tanggla_perkawinan" class="form-label">Tanggal Perkawinan</label>
          <input required type="date" class="form-control" id="tanggla_perkawinan" name="tanggla_perkawinan">
        </div>
        <div class="col-md-6">
          <label for="keterangan" class="form-label">Keterangan</label>
          <input required type="text" class="form-control" id="keterangan" name="keterangan">
        </div>
      </div>
      
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
  </div>

  <script>
    function _back_to_detai() {
      var url = window.location.href;
      var splitted_url = url.split("/");
      var nip = splitted_url[splitted_url.length - 1];
      window.location.href = "<?= BASEURL ?>/detail/" + nip;
    }
  </script>