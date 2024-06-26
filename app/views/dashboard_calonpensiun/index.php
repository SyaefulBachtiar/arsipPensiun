
<?php $dk = $data['cp']['daftar_keluarga']; 
      $rp = $data['cp']['riwayat_pekerjaan'];
      
      
      $status_dk = isset($dk[0]['status_dk']) ? $dk[0]['status_dk'] : '0';
      $status_cp = isset($data['cp']['status']) ? $data['cp']['status'] : '0';
      $status_rp = isset($rp[0]['status_rp']) ? $rp[0]['status_rp'] : '0';

      $nip = isset($data['cp']['nip']) ? $data['cp']['nip'] : 0;
      $_SESSION['nip'] = $nip;

?>
<div class="row justify-content-center align-items-center">
    <div class="col-lg-6 ">
        <?php Flasher::flash_login(); ?>
    </div>
</div>
<div class="container my-4">
    <h2 class="text-center"><?= isset($data['cp']['nama']) ? htmlspecialchars($data['cp']['nama']) : 'Nama Tidak Tersedia'; ?></h2>
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="progress">
            <?php if($status_cp && $status_dk && $status_rp === 25): ?>
                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                
                <?php elseif($status_cp === 25 && $status_cp !== 0) :?>
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

                    <?php elseif($status_dk === 25 && $status_dk !== 0): ?>
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

                        <?php elseif($status_rp === 25 && $status_rp !== 0) : ?>
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

                            <?php elseif($status_rp === 25 && $status_rp !== 0 && $status_cp === 25 && $status_cp !== 0) : ?>
                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

                                <?php elseif($status_dk === 25 && $status_dk !== 0 && $status_cp === 25 && $status_cp !== 0): ?>
                                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                       
                                    <?php elseif($status_dk === 25 && $status_dk !== 0 && $status_rp === 25 && $status_rp !== 0): ?>
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>


                                        <?php else: ?>
                                            <div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                <?php endif ?>
                
            </div>
        </div>
    </div>
    <div class="list-group mt-5">
        <a href="<?= BASEURL ?>/DPCP/<?= isset($data['cp']['nip']) ? htmlspecialchars($data['cp']['nip']) : 'nip Tidak Tersedia'; ?>" class="list-group-item list-group-item-action <?php if ($status == 'DPCPselesai') echo 'active'; ?>">
            Data DPCP
        </a>
        <a href="<?= BASEURL ?>/Data_daftarKeluarga/<?= isset($data['cp']['nip']) ? htmlspecialchars($data['cp']['nip']) : 'nip Tidak Tersedia'; ?>" class="list-group-item list-group-item-action <?php if ($status == 'DAKselesai') echo 'active'; ?>">
            Daftar Keluarga
        </a>
        <a href="<?= BASEURL ?>/Data_riwayatPekerjaan/<?= isset($data['cp']['nip']) ? htmlspecialchars($data['cp']['nip']) : 'nip Tidak Tersedia'; ?>" class="list-group-item list-group-item-action <?php if ($activeStep == 'riwayat_pekerjaan') echo 'active'; ?>">
            Riwayat Pekerjaan
        </a>
    </div>

   

    <!-- Main Content -->
    <div class="container my-5">
        <h1>DPCP</h1>
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search data...">
                    <button class="btn btn-primary" type="button">Search</button>
                </div>
            </div>
        </div>
        
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Unit Organisasi</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Data Row -->
                    <?php if(isset($data['cp'])): ?>
                    <tr>
                        <td><?= htmlspecialchars($data['cp']['nama']); ?></td>
                        <td><?= htmlspecialchars($data['cp']['nip']); ?></td>
                        <td><?= htmlspecialchars($data['cp']['unit_organisasi']); ?></td>
                        <td>
                        
                            <a href="#"><button class="btn btn-info btn-sm">Selesai</button></a>
                        </td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container my-5">
        <h1>Daftar Keluarga</h1>
        <div class="row mb-3">
            <div class="col-md-6">
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>ID Anggota Keluarga</th>
                        <th>NIP Terkait</th>
                        <th>Nama</th>
                        <th>Hubungan Keluarga</th>
                        <th>Tanggal Lahir</th>
                        <th>Pekerjaan/Sekolah</th>
                        <th>Tanggal Perkawinan</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Data Row -->
                    <?php if(isset($data['cp']['daftar_keluarga'])): ?>
                    <?php foreach($data['cp']['daftar_keluarga'] as $keluarga): ?>
                    <tr>
                        <td><?= htmlspecialchars($keluarga['id_anggota_keluarga']); ?></td>
                        <td><?= htmlspecialchars($keluarga['nip_terkait']); ?></td>
                        <td><?= htmlspecialchars($keluarga['nama']); ?></td>
                        <td><?= htmlspecialchars($keluarga['hubungan_keluarga']); ?></td>
                        <td><?= htmlspecialchars($keluarga['tanggal_lahir']); ?></td>
                        <td><?= htmlspecialchars($keluarga['pekerjaan_sekolah']); ?></td>
                        <td><?= htmlspecialchars($keluarga['tanggla_perkawinan']); ?></td>
                        <td><?= htmlspecialchars($keluarga['keterangan']); ?></td>
                        <td>
                        <a href="#"><button class="btn btn-info btn-sm">Selesai</button></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container my-5">
        <h1>Riwayat Pekerjaan</h1>
        <div class="row mb-3">
            <div class="col-md-6">
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>ID Riwayat Pekerjaan</th>
                        <th>NIP Terkait</th>
                        <th>Uraian Riwayat Pekerjaan</th>
                        <th>Mulai</th>
                        <th>Sampai</th>
                        <th>Pangkat/Gol/Ruang</th>
                        <th>Gaji</th>
                        <th>SK Pejabat</th>
                        <th>SK Nomor</th>
                        <th>SK Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Data Row -->
                    <?php if(isset($data['cp']['riwayat_pekerjaan'])): ?>
                    <?php foreach($data['cp']['riwayat_pekerjaan'] as $pekerjaan): ?>
                    <tr>
                        <td><?= htmlspecialchars($pekerjaan['id_riwayatpkerjaan']); ?></td>
                        <td><?= htmlspecialchars($pekerjaan['nip_terkait']); ?></td>
                        <td><?= htmlspecialchars($pekerjaan['uraian_riwayatpekerjaan']); ?></td>
                        <td><?= htmlspecialchars($pekerjaan['mulai']); ?></td>
                        <td><?= htmlspecialchars($pekerjaan['sampai']); ?></td>
                        <td><?= htmlspecialchars($pekerjaan['pangkat_gol_ruang']); ?></td>
                        <td><?= htmlspecialchars($pekerjaan['gaji']); ?></td>
                        <td><?= htmlspecialchars($pekerjaan['sk_pejabat']); ?></td>
                        <td><?= htmlspecialchars($pekerjaan['sk_nomor']); ?></td>
                        <td><?= htmlspecialchars($pekerjaan['sk_tanggla']); ?></td>
                        <td>
                        <a href="#"><button class="btn btn-info btn-sm">Selesai</button></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</tbody>
                </table>
            </div>
        </div>
    </div>
                    </div>
