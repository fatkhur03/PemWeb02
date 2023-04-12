
<?php
    include_once 'templates/header.php';
?>

<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <?php
    include_once 'templates/topbar.php';
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  <?php
    include_once 'templates/sidebar.php';
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Silahkan isi form pendaftaran</h1>
        <hr>
        <div class="container" style="margin-top: 30px">
            <div class="card shadow">
                <div class="card-body">
                    <form action="proses_registrasi.php" method="POST" style="background-color:">
                            <h1><b>Form Registrasi IT Club</b></h1>
                            <hr />
                            <div class="form-group row">
                                <label for="nim" class="col-4 col-form-label">NIM</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-adn"></i>
                                            </div>
                                        </div>
                                        <input id="nim" name="nim" placeholder="Masukkan Nim" type="text" required="required"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap" type="text" required="required"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-4">Jenis Kelamin</label>
                                <div class="col-8">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="gender" id="gender_0" type="radio" class="custom-control-input"
                                            value="Laki-laki">
                                        <label for="gender_0" class="custom-control-label">Laki-laki</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="gender" id="gender_1" type="radio" class="custom-control-input"
                                            value="Perempuan">
                                        <label for="gender_1" class="custom-control-label">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=" form-group row">
                                <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label>
                                <div class="col-8">
                                    <select id="domisili" name="domisili" class="custom-select">
                                        <option value="">--pilih--</option>
                                        <?php foreach ($domisiles as $domicile): ?>
                                        <option value="<?= $domicile ?>">
                                            <?= $domicile ?>
                                        </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class=" form-group row">
                                <label for="email" class="col-4 col-form-label">Email</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                        </div>
                                        <input id="email" name="email" placeholder="Masukkan Email" type="text" class="form-control"
                                            required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="prodi" class="col-4 col-form-label">Program Studi</label>
                                <div class="col-8">
                                    <select id="prodi" name="prodi" class="custom-select">
                                    <option value="">--pilih--</option>
                                        <?php foreach ($majors as $k => $major): ?>
                                        <option value="<?= $major ?>">
                                            <?= $major ?>
                                        </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-4">Skill Web &amp; Programming</label>
                                <div class="col-8">
                                    <?php foreach ($skills as $skill => $v): ?>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input name="skill[]" id="<?= $skill ?>" type="checkbox" class="custom-control-input"
                                            value="<?= $skill ?>">
                                        <label for="<?= $skill ?>" class="custom-control-label">
                                            <?= $skill ?>
                                        </label>
                                    </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary"> <i class="fa fa-plus"></i>
                                        Submit</button>
                                    <button name="submit" type="reset" class="btn btn-danger"> <i class="fa fa-times"></i>
                                        Reset</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</main>
</div>
  <!-- /.content-wrapper -->

  <?php
    include_once 'templates/footer.php';
  ?>
 
