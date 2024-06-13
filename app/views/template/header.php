

<?php if($data['judul'] != 'Login'):?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'] ?></title>
    <!-- Bootstrap CSS -->
    <link href="http://localhost/arsipPensiun/public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/arsipPensiun/public/bootstrap.min.js">

    <header class="bg-light py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <a href="<?= BASEURL ?>/dashboard" class="navbar-brand">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a7/Logo_PU_%28RGB%29.jpg" alt="Logo" class="img-fluid" style="max-height: 50px;">
                    </a>
                </div>
                <div class="col-md-6 text-end">
                    <a href="<?= BASEURL ?>/login"><button class="btn btn-danger">Logout</button></a>
                </div>
            </div>
        </div>
    </header>

    <?php else:?>

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'] ?></title>
    <!-- Bootstrap CSS -->
    <link href="http://localhost/arsipPensiun/public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/arsipPensiun/public/bootstrap.min.js">
    
    <header class="bg-light py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <a href="#" class="navbar-brand">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a7/Logo_PU_%28RGB%29.jpg" alt="Logo" class="img-fluid" style="max-height: 50px;">
                    </a>
                </div>
                <div class="col-md-6 text-end">
                   
                </div>
            </div>
        </div>
    </header>


        <?php endif ?>


