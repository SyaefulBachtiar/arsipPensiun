
<div class="container my-5">
        <h1 class="mb-4">Tambah Data Riwayat Pekerjaan</h1>
        <form action="<?= BASEURL?>/Data_riwayatPekerjaan/read_saved_rp" method="POST">
            <div class="mb-3">
                <label for="id_riwayatpkerjaan" class="form-label">ID Riwayat Pekerjaan</label>
                <input require type="text" class="form-control" id="id_riwayatpkerjaan" name="id_riwayatpkerjaan" >
            </div>
            <div class="mb-3">
                <label for="nip_terkait" class="form-label">NIP Terkait</label>
                <input require type="text" class="form-control" id="nip_terkait" name="nip_terkait" >
            </div>
            <div class="mb-3">
                <label for="uraian_riwayatpekerjaan" class="form-label">Uraian Riwayat Pekerjaan</label>
                <textarea class="form-control" id="uraian_riwayatpekerjaan" name="uraian_riwayatpekerjaan" rows="3" ></textarea>
            </div>
            <div class="mb-3">
                <label for="mulai" class="form-label">Mulai</label>
                <input require type="date" class="form-control" id="mulai" name="mulai" >
            </div>
            <div class="mb-3">
                <label for="sampai" class="form-label">Sampai</label>
                <input require type="date" class="form-control" id="sampai" name="sampai" >
            </div>
            <div class="mb-3">
                <label for="pangkat_gol_ruang" class="form-label">Pangkat Golongan Ruang</label>
                <input require type="text" class="form-control" id="pangkat_gol_ruang" name="pangkat_gol_ruang" >
            </div>
            <div class="mb-3">
                <label for="gaji" class="form-label">Gaji</label>
                <input require type="number" class="form-control" id="gaji" name="gaji" >
            </div>
            <div class="mb-3">
                <label for="sk_pejabat" class="form-label">SK Pejabat</label>
                <input require type="text" class="form-control" id="sk_pejabat" name="sk_pejabat" >
            </div>
            <div class="mb-3">
                <label for="sk_nomor" class="form-label">SK Nomor</label>
                <input type="text" class="form-control" id="sk_nomor" name="sk_nomor" >
            </div>
            <div class="mb-3">
                <label for="sk_tanggla" class="form-label">SK Tanggal</label>
                <input type="date" class="form-control" id="sk_tanggla" name="sk_tanggla" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>