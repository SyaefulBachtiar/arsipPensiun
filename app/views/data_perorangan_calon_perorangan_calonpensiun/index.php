

<div class="container my-5">
        <h1 class="mb-4">Tambah Data Calon Pensiun</h1>
        <form action="<?= BASEURL ?>/dpcp/read_saved_dpcp" method="POST">
            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="lahir_tempat" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="lahir_tempat" name="lahir_tempat" required>
            </div>
            <div class="mb-3">
                <label for="lahir_tgl" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="lahir_tgl" name="lahir_tgl" required>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="">Pilih Gender</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="status_kawin" class="form-label">Status Kawin</label>
                <select class="form-control" id="status_kawin" name="status_kawin" required>
                    <option value="">Pilih Status Kawin</option>
                    <option value="Belum Kawin">Belum Kawin</option>
                    <option value="Kawin">Kawin</option>
                    <option value="Cerai Hidup">Cerai Hidup</option>
                    <option value="Cerai Mati">Cerai Mati</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="pendidikan_jenjang" class="form-label">Pendidikan Jenjang</label>
                <input type="text" class="form-control" id="pendidikan_jenjang" name="pendidikan_jenjang" required>
            </div>
            <div class="mb-3">
                <label for="pendidikan_jurusan" class="form-label">Pendidikan Jurusan</label>
                <input type="text" class="form-control" id="pendidikan_jurusan" name="pendidikan_jurusan" required>
            </div>
            <div class="mb-3">
                <label for="pendidikan_tahunlulus" class="form-label">Tahun Lulus</label>
                <input type="text" class="form-control" id="pendidikan_tahunlulus" name="pendidikan_tahunlulus" required>
            </div>
            <div class="mb-3">
                <label for="no_karpeg" class="form-label">No Karpeg</label>
                <input type="text" class="form-control" id="no_karpeg" name="no_karpeg" required>
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" required>
            </div>
            <div class="mb-3">
                <label for="pangkat_gol_ruang" class="form-label">Pangkat Golongan Ruang</label>
                <input type="text" class="form-control" id="pangkat_gol_ruang" name="pangkat_gol_ruang" required>
            </div>
            <div class="mb-3">
                <label for="tmt" class="form-label">TMT</label>
                <input type="date" class="form-control" id="tmt" name="tmt" required>
            </div>
            <div class="mb-3">
                <label for="unit_organisasi" class="form-label">Unit Organisasi</label>
                <input type="text" class="form-control" id="unit_organisasi" name="unit_organisasi" required>
            </div>
            <div class="mb-3">
                <label for="masa_kerja_golongan_dlm_bulan" class="form-label">Masa Kerja Golongan dalam Bulan</label>
                <input type="number" class="form-control" id="masa_kerja_golongan_dlm_bulan" name="masa_kerja_golongan_dlm_bulan" required>
            </div>
            <div class="mb-3">
                <label for="masa_kerja_golongan_tgl" class="form-label">Masa Kerja Golongan Tanggal</label>
                <input type="date" class="form-control" id="masa_kerja_golongan_tgl" name="masa_kerja_golongan_tgl" required>
            </div>
            <div class="mb-3">
                <label for="masa_kerja_pensiun_dlm_bulan" class="form-label">Masa Kerja Pensiun dalam Bulan</label>
                <input type="number" class="form-control" id="masa_kerja_pensiun_dlm_bulan" name="masa_kerja_pensiun_dlm_bulan" required>
            </div>
            <div class="mb-3">
                <label for="masa_kerja_pensiun_tgl" class="form-label">Masa Kerja Pensiun Tanggal</label>
                <input type="date" class="form-control" id="masa_kerja_pensiun_tgl" name="masa_kerja_pensiun_tgl" required>
            </div>
            <div class="mb-3">
                <label for="masa_kerja_sebelum_pns_start" class="form-label">Masa Kerja Sebelum PNS Mulai</label>
                <input type="date" class="form-control" id="masa_kerja_sebelum_pns_start" name="masa_kerja_sebelum_pns_start" required>
            </div>
            <div class="mb-3">
                <label for="masa_kerja_sebelum_pns_end" class="form-label">Masa Kerja Sebelum PNS Akhir</label>
                <input type="date" class="form-control" id="masa_kerja_sebelum_pns_end" name="masa_kerja_sebelum_pns_end" required>
            </div>
            <div class="mb-3">
                <label for="gaji_pokok_terakhir" class="form-label">Gaji Pokok Terakhir</label>
                <input type="number" class="form-control" id="gaji_pokok_terakhir" name="gaji_pokok_terakhir" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_masuk_pns" class="form-label">Tanggal Masuk PNS</label>
                <input type="date" class="form-control" id="tanggal_masuk_pns" name="tanggal_masuk_pns" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>