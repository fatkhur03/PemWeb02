<?php
    require_once '../dbkoneksi.php';

    //menangkap data dari url   
    $id = $_GET['iddel'];
    
    $dbh->query("DELETE FROM vendor WHERE id=$id");

    header('location:index.php');
?>