
<?php 

?>

<div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="row justify-content-center w-100">
            <div class="col-12 col-sm-8  col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-body ">
                        <h4 class="card-title pb-5 pt-2 mb-3 text-center">Login Arsippensiun Dinas PUPR</h4>
                        <form action="<?= BASEURL ?>/dashboard" method="POST">
                            <div class="mb-3">
                                <label for="nip" class="form-label">Masukan NIP</label>
                                <input type="nip" class="form-control" id="nip" placeholder="Masukan NIP" name="nip">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary w-100">Login</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

