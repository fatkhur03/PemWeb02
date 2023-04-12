<?php
require_once '../dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM pelanggan";
$rs = $dbh->query($sql);
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
        <h1 class="mt-4">Tabel Data Pelanggan</h1>
        <hr>
        <a class="btn btn-lg btn-primary" href="create.php"><i class="fa fa-plus"></i> Tambah</a>
        <div style="margin-top: 30px; ">
            <table class="table">
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>TTL</th>
                        <th>Email</th>
                        <th>ID</th>
                        <th>Action</th>
                        <tbody>
                            <?php
                                $nomor = 1;
                                foreach ($rs as $row) {
                            ?>
                            <tr>
                                <td>
                                    <?= $nomor ?>
                                </td>
                                <td>
                                    <?= $row['kode'] ?>
                                </td>
                                <td>
                                    <?= $row['nama'] ?>
                                </td>
                                <td>
                                    <?= $row['jk'] ?>
                                </td>
                                <td>
                                    <?= $row['tmp_lahir'] ?>, <?= $row['tgl_lahir'] ?>
                                </td>
                                <td>
                                    <?= $row['email'] ?>
                                </td>
                                <td>
                                    <?= $row['kartu_id'] ?>
                                </td>

                                <td>
                                    <a class="btn btn-primary" href="view_pelanggan.php?id=<?= $row['id'] ?>"><i class="fa fa-eye"></i> Detail</a>
                                    <a class="btn btn-warning" href="edit_pelanggan.php?idedit=<?= $row['id'] ?>"><i class="fa fa-pen"></i> Edit</a>
                                    <a class="btn btn-danger" href="delete_pelanggan.php?iddel=<?= $row['id'] ?>"
                                        onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                            <?php
                            $nomor++;
                        }
                        ?>
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
 
