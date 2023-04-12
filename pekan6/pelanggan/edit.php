<?php
require_once '../dbkoneksi.php';
if (isset($_GET['idedit'])) {
  $sql = "SELECT * FROM pelanggan WHERE id=?";
  $st = $dbh->prepare($sql);
  $st->execute([$_GET['idedit']]);
  $row = $st->fetch();
}
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
        <h1 class="mt-4">Form Edit Pelanggan</h1>
        <hr>
        <div class="container" style="margin-top: 30px">
            <div class="card shadow">
                <div class="card-body">
                <form method="POST" action="proses.php">
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Kode</label>
        <div class="col-8">
            <div class="input-group">
            <input id="kode" name="kode" type="text" class="form-control" value="<?php if (isset($_GET['idedit'])) {
                                                                                echo $row['kode'];
                                                                              } ?>">
        <?php
        if (isset($_GET['idedit'])) {
          echo "<input name='idedit' type='hidden' value='" . $_GET['idedit'] . "'>";
        }
        ?>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label>
        <div class="col-8">
            <div class="input-group">
            <input id="nama" name="nama" type="text" class="form-control" value="<?php if (isset($_GET['idedit'])) {
                                                                                echo $row['nama'];
                                                                              } ?>">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="jk" class="col-4 col-form-label">Jenis Kelamin</label>
        <div class="col-8">
            <div class="input-group">
            <input id="jk" name="jk" value="L" type="radio"  <?php if (isset($_GET['idedit'])) {
                                                                                if ($row['jk'] == "L") {
                                                                                  echo "checked";
                                                                                }
                                                                              } ?>>&nbsp; Laki-laki &nbsp;&nbsp;
        <input id="jk" name="jk" value="P" type="radio"  <?php if (isset($_GET['idedit'])) {
                                                                                if ($row['jk'] == "P") {
                                                                                  echo "checked";
                                                                                }
                                                                              } ?>>&nbsp; Perempuan
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
        <div class="col-8">
            <div class="input-group">
            <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" value="<?php if (isset($_GET['idedit'])) {
                                                                                          echo $row['tmp_lahir'];
                                                                                        } ?>">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
        <div class="col-8">
            <div class="input-group">
            <input id="tgl_lahir" name="tgl_lahir" value="<?php if (isset($_GET['idedit'])) {
                                                        echo $row['tgl_lahir'];
                                                      } ?>" type="date" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-4 col-form-label">Email</label>
        <div class="col-8">
            <div class="input-group">
            <input id="email" name="email" value="<?php if (isset($_GET['idedit'])) {
                                                echo $row['email'];
                                              } ?>" type="email" class="form-control">
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
        <?php
        if (isset($_GET['idedit'])) {
          $sqlkartu = "SELECT * FROM kartu WHERE id=?";
          $stkartu = $dbh->prepare($sqlkartu);
          $stkartu->execute([$row['kartu_id']]);
          $rowkartu = $stkartu->fetch();
        ?>
          <option value="<?= $rowkartu['id'] ?>"><?= $rowkartu['nama'] ?></option>
        <?php
        }
        foreach ($rsjenis as $rowjenis) {
        ?>
          <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
        <?php
        }
        ?>
      </select>
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <div class="offset-4 col-8">
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?php if (isset($_GET['idedit'])) {
                                                                                        echo "Update";
                                                                                      } else {
                                                                                        echo "Simpan";
                                                                                      } ?>" />
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
 
