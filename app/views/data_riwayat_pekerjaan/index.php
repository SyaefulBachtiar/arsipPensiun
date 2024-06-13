<div class="container my-5">
        <h1 class="mb-4">Tambah Data Riwayat Pekerjaan</h1>
        <form action="<?= BASEURL?>/dpcp/read_saved_rp" method="POST">
            <div class="mb-3">
                <label for="id_riwayatpkerjaan" class="form-label">ID Riwayat Pekerjaan</label>
                <input type="text" class="form-control" id="id_riwayatpkerjaan" name="id_riwayatpkerjaan" required>
            </div>
            <div class="mb-3">
                <label for="nip_terkait" class="form-label">NIP Terkait</label>
                <input type="text" class="form-control" id="nip_terkait" name="nip_terkait" required>
            </div>
            <div class="mb-3">
                <label for="uraian_riwayatpekerjaan" class="form-label">Uraian Riwayat Pekerjaan</label>
                <textarea class="form-control" id="uraian_riwayatpekerjaan" name="uraian_riwayatpekerjaan" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="mulai" class="form-label">Mulai</label>
                <input type="date" class="form-control" id="mulai" name="mulai" required>
            </div>
            <div class="mb-3">
                <label for="sampai" class="form-label">Sampai</label>
                <input type="date" class="form-control" id="sampai" name="sampai" required>
            </div>
            <div class="mb-3">
                <label for="pangkat_gol_ruang" class="form-label">Pangkat Golongan Ruang</label>
                <input type="text" class="form-control" id="pangkat_gol_ruang" name="pangkat_gol_ruang" required>
            </div>
            <div class="mb-3">
                <label for="gaji" class="form-label">Gaji</label>
                <input type="number" class="form-control" id="gaji" name="gaji" required>
            </div>
            <div class="mb-3">
                <label for="sk_pejabat" class="form-label">SK Pejabat</label>
                <input type="text" class="form-control" id="sk_pejabat" name="sk_pejabat" required>
            </div>
            <div class="mb-3">
                <label for="sk_nomor" class="form-label">SK Nomor</label>
                <input type="text" class="form-control" id="sk_nomor" name="sk_nomor" required>
            </div>
            <div class="mb-3">
                <label for="sk_tanggla" class="form-label">SK Tanggal</label>
                <input type="date" class="form-control" id="sk_tanggla" name="sk_tanggla" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>