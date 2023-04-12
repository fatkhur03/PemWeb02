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
        <h1 class="mt-4">Form Tambah Produk</h1>
        <hr>
        <div class="container" style="margin-top: 30px">
            <div class="card shadow">
                <div class="card-body" >
                    <form action="proses_produk.php" method="POST" style="background-color:">
                            <div class="form-group row">
                                <label for="kode" class="col-4 col-form-label">Code</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="kode" name="kode" placeholder="Masukkan Kode" type="text" required="required"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama" class="col-4 col-form-label">Nama Produk</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="nama" name="nama" placeholder="Masukkan Nama  Produk" type="text" required="required"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="harga_beli" name="harga_beli" placeholder="Masukkan Harga Beli" type="text" required="required"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="stok" class="col-4 col-form-label">Stok</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="stok" name="stok" placeholder="Masukkan Jumlah Stok" type="text" required="required"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="min_stok" class="col-4 col-form-label">Minimal Stok</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="min_stok" name="min_stok" placeholder="Masukkan Jumlah Min Stok" type="text" required="required"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="prodi" class="col-4 col-form-label">Jenis Produk</label>
                                <div class="col-8">
        <?php 
            $sqljenis = "SELECT * FROM jenis_produk";
            $rsjenis = $dbh->query($sqljenis);
        ?>
      <select id="jenis" name="jenis" class="custom-select">
          <?php 
            foreach($rsjenis as $rowjenis){
         ?>
            <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama']?></option>
         <?php
            }
        ?>
        <!--
        <option value="1">Elektronik</option>
        <option value="2">Furniture</option>
        <option value="3">Makanan</option>-->

      </select>
    </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Simpan"/>
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
 
