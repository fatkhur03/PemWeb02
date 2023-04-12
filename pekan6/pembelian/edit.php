<?php
require_once '../dbkoneksi.php';

$_id = $_GET['id'];
$sql = "SELECT * FROM pembelian WHERE id = ?";

$st = $dbh->prepare($sql);
$st->execute([$_id]);

$card = $st->fetch();
?>

<?php
    include_once 'templates/header.php';
?>

<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
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
        <h1 class="mt-4">Edit Data Vendor</h1>
        <hr>

<div class="container">
<form method="POST" action="proses.php">
    >

    <div class="form-group row mt-2">
        <label for="nomor" class="col-4 col-form-label">Tanggal</label>
        <div class="col-8">
            <div class="input-group">
            <input id="tanggal" name="tanggal" type="text" class="form-control" value="<?= $card['tanggal'] ?>">            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label for="nomor" class="col-4 col-form-label">Nomor</label>
        <div class="col-8">
            <div class="input-group">
            <input id="nomor" name="nomor" type="text" class="form-control" value="<?= $card['nomor'] ?>">            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label for="produk_id" class="col-4 col-form-label">Produk ID</label>
        <div class="col-8">
            <div class="input-group">
            <input id="produk_id" name="produk_id" type="text" class="form-control" value="<?= $card['produk_id'] ?>">            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
        <div class="col-8">
            <div class="input-group">
            <input id="jumlah" name="jumlah" type="text" class="form-control" value="<?= $card['jumlah'] ?>">            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label for="harga" class="col-4 col-form-label">Harga</label>
        <div class="col-8">
            <div class="input-group">
            <input id="harga" name="harga" type="text" class="form-control" value="<?= $card['harga'] ?>">            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label for="vendor_id" class="col-4 col-form-label">Vendor ID</label>
        <div class="col-8">
            <div class="input-group">
            <input id="vendor_id" name="vendor_id" type="text" class="form-control" value="<?= $card['vendor_id'] ?>">            </div>
        </div>
    </div>

    <input type="hidden" value="<?= $card['id'] ?>" name="id">

    <div class="form-group row mt-2">
        <div class="offset-4 col-8">
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Update" />
        </div>
    </div>
</form>
</div>


</div>
        
        </div>
    </main>
    </div>
      <!-- /.content-wrapper -->
    
      <?php
        include_once 'templates/footer.php';
      ?>
     
   