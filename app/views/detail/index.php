<div class="row justify-content-center align-items-center">
    <div class="col-lg-6 ">
        <?php Flasher::flash_login(); ?>
    </div>
</div>


<?php $_SESSION['nip'] = $data['cp']['nip']; 
$dk = $data['cp']['daftar_keluarga']; 
$rp = $data['cp']['riwayat_pekerjaan'];


$status_dk = isset($dk[0]['status_dk']) ? $dk[0]['status_dk'] : '0';
$status_rp = isset($rp[0]['status_rp']) ? $rp[0]['status_rp'] : '0';
echo $data['cp']['nip'];
echo "<br>";
echo $status_dk;
echo "<br>";
echo $status_rp;

   
?>
<div class="container my-4">
        <h2 class="text-center"><?= $data['cp']['nama'] ?> <?= $data['cp']['nip'] ?></h2>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="d-flex justify-content-between mt-4">
                    <div class="step <?php if ($activeStep == 'data_dasar') echo 'active'; ?>">
                        <div class="step-icon">
                            <i class="fas fa-user"></i>
                        </div>
                    
                    </div>
                    <div class="step <?php  ?>">
                        <div class="step-icon">2</div>
                        <div class="step-text">Data Terkait Pensiun</div>
                    </div>
                    <div class="step <?php if ($activeStep == 'daftar_keluarga') echo 'active'; ?>">
                        <div class="step-icon">3</div>
                        <div class="step-text">Daftar Keluarga</div>
                    </div>
                    <div class="step <?php if ($activeStep == 'riwayat_pekerjaan') echo 'active'; ?>">
                        <div class="step-icon">4</div>
                        <div class="step-text">Riwayat Pekerjaan</div>
                    </div>
                    <div class="step <?php if ($activeStep == 'selesai') echo 'active'; ?>">
                        <div class="step-icon"></div>
                        <div class="step-text">Selesai</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-group mt-5">

            <p  class="list-group-item list-group-item-action">
                DPCP <a href="<?= BASEURL ?>/Detail/setujui/<?= $data['cp']['nip'];?>"><button class="btn btn-success">Setujui</button></a>
            </p>
            
            <p  class="list-group-item list-group-item-action">
                Daftar Keluarga <a href="<?= BASEURL ?>/Detail/setujui/"<?= $status_dk ?>><button class="btn btn-success">Setujui</button></a>
            </p>
            <p  class="list-group-item list-group-item-action">
                Riwayat Pekerjaan <a href="<?= BASEURL ?>/Detail/setujui/"<?= $status_rp ?>><button class="btn btn-success">Setujui</button></a>
            </p>
        </div>
    </div>