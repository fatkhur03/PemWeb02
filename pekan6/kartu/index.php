<?php
require_once '../dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM kartu";
$cards = $dbh->query($sql);
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
        <h1 class="mt-4">Tabel Data Kartu</h1>
        <hr>
        <a class="btn btn-lg btn-primary" href="create.php"><i class="fa fa-plus"></i> Tambah</a>
        

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Diskon</th>
            <th>Iuran</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor  = 1;
        foreach ($cards as $card) {
        ?>
            <tr>
                <td><?= $nomor++ ?></td>
                <td><?= $card['kode'] ?></td>
                <td><?= $card['nama'] ?></td>
                <td><?= $card['diskon'] ?></td>
                <td><?= $card['iuran'] ?></td>
                <td>
                    <a class="btn btn-primary" href="edit.php?id=<?= $card['id'] ?>">Edit</a>
                    <a class="btn btn-danger" href="delete.php?iddel=<?= $card['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $card['nama'] ?>?')) {return false}">Delete</a>
                </td>
            </tr>
        <?php } ?>
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
     
    