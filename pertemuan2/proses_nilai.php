<?php
if(isset($_GET['submit'])){
    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $tugas = $_GET['tugas'];

        echo '<br>Nama : '.$nama;
        echo '<br>Mata Kuliah : '.$matkul;
        echo '<br>Nilai UTS : '.$uts;
        echo '<br>Nilai UAS : '.$uas;
        echo '<br>Nilai Tugas : '.$tugas;
        echo "Rata-rata : " . round(($uts + $uas + $tugas) / 3, 2);
}else{
    echo "<h1 align='center' style='color:red'>😜<br>wlee</h1>";
}
?>
