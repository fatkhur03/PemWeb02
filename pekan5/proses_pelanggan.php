<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_kode = $_POST['kode'];
   $_nama = $_POST['nama'];
   $_jk = $_POST['jk'];
   $_tempat = $_POST['tmp_lahir'];
   $_tanggal = $_POST['tgl_lahir'];
   $_email = $_POST['email'];
   $_kartu = $_POST['kartu_id'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_kode; // ? 1
   $ar_data[]=$_nama; // ? 2
   $ar_data[]=$_jk;// 3
   $ar_data[]=$_tempat;
   $ar_data[]=$_tanggal;
   $ar_data[]=$_email;
   $ar_data[]=$_kartu; // ? 7

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pelanggan (kode,nama,jk,tmp_lahir,tgl_lahir,
    email,kartu_id) VALUES (?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pelanggan SET kode=?,nama=?,jk=?,tmp_lahir=?,
    tgl_lahir=?,email=?,kartu_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_pelanggan.php');
?>