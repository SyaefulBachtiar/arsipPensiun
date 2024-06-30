<div class="row justify-content-center align-items-center">
    <div class="col-lg-6 ">
        <?php Flasher::flash_login(); ?>
    </div>
</div>


<?php $_SESSION['nip'] = $data['cp']['nip']; 
      
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
                DPCP 
            </p>
            
            <p  class="list-group-item list-group-item-action">
                Daftar Keluarga
            </p>
            <p  class="list-group-item list-group-item-action">
                Riwayat Pekerjaan <a href="<?= BASEURL ?>/Detail/setujui"><button class="btn btn-success">Setujui</button></a>
            </p>
        </div>
    </div>