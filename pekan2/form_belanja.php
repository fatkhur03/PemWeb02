<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belanja Online </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
  <div class="m-4">
    <div class="col-4 float-right">
      <ul class="list-group;">
        <li class="list-group-item bg-primary">Daftar Harga</li>
        <li class="list-group-item">TV : 4.200.000</li>
        <li class="list-group-item">Kulkas : 3.100.000</li>
        <li class="list-group-item">Mesin cuci : 3.800.000</li>
        <li class="list-group-item bg-primary">Harga Dapat Berubah Setiap Saat</li>
      </ul>

    </div>
    <form method="POST" action="">
      <h2>Belanja Online</h2>
      <hr>
      <div class="form-group row">
        <label for="customer" class="col-1 col-form-label">Customer</label>
        <div class="col-4">
          <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-1">Pilih Produk</label>
        <div class="col-8">
          <div class="custom-control custom-radio custom-control-inline">
            <input name="product" id="product_0" type="radio" class="custom-control-input" value="tv" required="required">
            <label for="product_0" class="custom-control-label">TV</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="product" id="product_1" type="radio" class="custom-control-input" value="kulkas" required="required">
            <label for="product_1" class="custom-control-label">KULKAS</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="product" id="product_2" type="radio" class="custom-control-input" value="mesin cuci" required="required">
            <label for="product_2" class="custom-control-label">MESIN CUCI</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="jumlah" class="col-1 col-form-label">Jumlah</label>
        <div class="col-4">
          <input id="jumlah" name="jumlah" placeholder="Masukkan Jumlah" type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-1 col-8">
          <button name="submit" type="submit" class="btn btn-success">Kirim</button>
        </div>
      </div>
    </form>
  </div>

</body>

</html>
<!-- bagian php -->
<?php
if (isset($_POST['submit'])) {
  $customer = $_POST['customer'];
  $produk = $_POST['product'];
  $jumlah = $_POST['jumlah'];

  echo "Nama Customer: $customer <br>";
  echo "Produk Pilihan: $produk <br>";
  echo "jumlah Beli:  $jumlah  <br>";
}
if ($produk ==  "tv") {
  echo "Total Belanja: " . ($jumlah * 4200000);
} elseif ($produk == "kulkas") {
  echo "Total Belanja: " . ($jumlah * 3100000);
} elseif ($produk == "mesin cuci") {
  echo "Total Belanja:  " . ($jumlah * 3800000);
}
?>