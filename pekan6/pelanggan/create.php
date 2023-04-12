<?php 
    require_once '../dbkoneksi.php';
?>

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
                <form method="POST" action="proses.php">
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Kode</label>
        <div class="col-8">
            <div class="input-group">
                <input id="kode" name="kode" type="text" class="form-control" value="" placeholder="Masukkan Kode">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label>
        <div class="col-8">
            <div class="input-group">
                <input id="nama" name="nama" type="text" class="form-control" value="" placeholder="Masukkan Nama Pelanggan">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="jk" class="col-4 col-form-label">Jenis Kelamin</label>
        <div class="col-8">
            <div class="input-group">
                <input id="jk" name="jk" value="L" type="radio" class=""> &nbsp;Laki-laki &nbsp;&nbsp;
                <input id="jk" name="jk" value="P" type="radio" class=""> &nbsp;Perempuan
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
        <div class="col-8">
            <div class="input-group">
                <input id="tmp_lahir" name="tmp_lahir" value="" type="text" class="form-control" placeholder="Masukkan Tempat">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
        <div class="col-8">
            <div class="input-group">
                <input id="tgl_lahir" name="tgl_lahir" value="" type="date" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-4 col-form-label">Email</label>
        <div class="col-8">
            <div class="input-group">
                <input id="email" name="email" value="" type="text" class="form-control" placeholder="Masukkan Email">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="kartu_id" class="col-4 col-form-label">Kartu id</label>
        <div class="col-8">
            <?php 
            $sqljenis = "SELECT * FROM kartu";
                $rsjenis = $dbh->query($sqljenis);
            ?>
                <select id="kartu_id" name="kartu_id" class="custom-select">
                    <option value="">--pilih--</option>
                    <?php 
                foreach($rsjenis as $rowjenis){
            ?>
                    <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama']?></option>
                    <?php
                }
            ?>

                </select>
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="proses" type="submit" value="Simpan" class="btn btn-primary"> <i class="fa fa-plus"></i>Submit</button>
                <button name="submit" type="reset" class="btn btn-danger"> <i class="fa fa-times"></i>Reset</button>
            </div>
        </div>
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
 
