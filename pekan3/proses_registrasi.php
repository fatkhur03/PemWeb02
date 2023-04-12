<?php

use LDAP\Result;

if (isset($_POST['submit'])) {
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $gender = $_POST['gender'];
  $prodi = $_POST['prodi'];
  $skills = $_POST['skill'];
  $domisili = $_POST['domisili'];

  function skor_skill($skills)
  {
    $skill_list = [
      'HTML' => 10,
      'CSS' => 10,
      'JavaScript' => 20,
      'RWD Bootstrap' => 30,
      'PHP' => 30,
      'Python' => 30,
      'Java' => 50
    ];
    $result = 0;

    foreach ($skills as $skill) {
      $result = $result + $skill_list[$skill];
    }

    return $result;
  }
  $hasil_fungsi1 = skor_skill($skills);
  // fungsi kedua
  function kategori_skill($number)
  {
    $kategori_skill = "";
    if ($number == 0) {
      $kategori_skill = "Tidak memadai";
    } elseif ($number <= 40) {
      $kategori_skill = "Kurang";
    } else if ($number <= 60) {
      $kategori_skill = "Cukup";
    } else if ($number <= 100) {
      $kategori_skill = "baik";
    } else {
      $kategori_skill = "sangat baik";
    }
    return $kategori_skill;
  }
  $hasil_fungsi2 = kategori_skill($hasil_fungsi1);
  echo "NIM: $nim";
  echo "<br> Nama: $nama";
  echo "<br> Jenis Kelamin: $gender";
  echo "<br> Program Studi: $prodi";
  echo "<br> Skill Programming: ";
  foreach ($skills as $skill) {
    echo $skill . ", ";
  }
  echo "<br> Tempat Domisili: $domisili";
  echo "<br> Skor Skill: " . $hasil_fungsi1;
  echo "<br> Kategori Skill: " . $hasil_fungsi2;
}
