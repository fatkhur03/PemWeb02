<?php 
require_once '../dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM produk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
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
        <h1 class="mt-4">Detail Data Produk</h1>
        <hr>
        <a class="btn btn-md btn-info" href="index.php"><i class="fa fa-reply "></i> Kembali</a>
        <br>
        <br>
        <div class="">
            <table class="table">
            <tbody>
                    <tr>
                        <td><b>ID</b></td>
                        <td><?=$row['id']?></td>
                    </tr>
                    <tr>
                        <td><b>Kode</b></td>
                        <td><?=$row['kode']?></td>
                    </tr>
                    <tr>
                        <td><b>Nama Produk</b></td>
                        <td><?=$row['nama']?></td>
                    </tr>
                    <tr>
                        <td><b>Harga Jual</b></td>
                        <td><?=$row['harga_jual']?></td>
                    </tr>
                    <tr>
                        <td><b>Harga Beli</b></td>
                        <td><?=$row['harga_beli']?></td>
                    </tr>
                    <tr>
                        <td><b>Stok</b></td>
                        <td><?=$row['stok']?></td>
                    </tr>
                    <tr>
                        <td><b>Minimum Stok</b></td>
                        <td><?=$row['min_stok']?></td>
                    </tr>
                    <tr>
                        <td><b>Jenis Produk</b></td>
                        <td><?=$row['jenis_produk_id']?></td>
                    </tr>
                </tbody>
            </table>
        </div>
</div>
    </main>
</div>
  <!-- /.content-wrapper -->

  <?php
    include_once 'templates/footer.php';
  ?>
 
