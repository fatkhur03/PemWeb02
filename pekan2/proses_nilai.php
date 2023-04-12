<?php
if (isset($_GET['submit'])) {
  $nama = $_GET['name'];
  $matkul = $_GET['matkul'];
  $uts = $_GET['uts'];
  $uas = $_GET['uas'];
  $praktikum = $_GET['praktikum'];
  $nilai_rata_rata = round(($uts + $uas + $praktikum) / 3, 2);

  echo "Nama: $nama <br>";
  echo "Mata Kuliah: $matkul <br>";
  echo "Nilai UTS: $uts <br>";
  echo "Nilai UAS: $uas <br>";
  echo "Nilai Praktikum: $praktikum<br>";
  echo "nilai rata-rata: $nilai_rata_rata <br>";
  // tugas cari gradenya
} else {
  echo "Tidak Ada Data!";
}
if ($nilai_rata_rata <= 35) {
  echo "Grade: E";
} elseif ($nilai_rata_rata <= 55) {
  echo "Grade: D";
} elseif ($nilai_rata_rata <= 69) {
  echo "Grade: C";
} elseif ($nilai_rata_rata <= 84) {
  echo "Grade: B";
} elseif ($nilai_rata_rata <= 100) {
  echo "Grade: A";
} else {
  echo "Invalid";
}
