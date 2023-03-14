<?php

if (isset($_POST['submit'])) {
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $gender = $_POST['gender'];
  $prodi = $_POST['prodi'];
  $skills = $_POST['skill'];
  $domisili = $_POST['domisili'];
  $email = $_POST['email'];

  function skor_skill($skills){
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
  $skor = skor_skill($skills);

  function kategori_skill($kategori){
    $kategori_skill = "";
    if ($kategori == 0) {
      $kategori_skill = "Tidak memadai";
    } else if ($kategori <= 40) {
      $kategori_skill = "Kurang";
    } else if ($kategori <= 60) {
      $kategori_skill = "Cukup";
    } else if ($kategori <= 100) {
      $kategori_skill = "baik";
    } else if ($kategori <= 170) {
        $kategori_skill = "sangat baik";
    }else {
      $kategori_skill = "Invalid";
    }
    return $kategori_skill;
  }
  $Kategori = kategori_skill($skor);

}   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pekan 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container col-lg-10" style="margin-top: 40px">
        <div class="conten-header">
            <h1 align="center"><b>Data Registrasi IT Club</b></h1>
            <br>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-striped">
        <thead>
            <tr>
                <th >No</th>
                <th >NIM</th>
                <th >Nama</th>
                <th >Jenkel</th>
                <th >Domisili</th>
                <th >Email</th>
                <th >Prodi</th>
                <th >Skill</th>
                <th >skor</th>
                <th >kategori</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
                    <?= $nim ?>
                </td>
                <td>
                    <?= $nama ?>
                </td>
                <td>
                    <?= $gender ?>
                </td>
                <td>
                    <?= $domisili ?>
                </td>
                <td>
                    <?= $email ?>
                </td>
                <td>
                    <?= $prodi ?>
                </td>
                <td>
                    <?php foreach ($skills as $skill) {
                        echo $skill . ", ";
                      } ?>
                </td>
                <td>
                    <?= $skor ?>
                </td>
                <td>
                    <?= $Kategori ?>
                </td>
                
            </tr>

            
        </tbody>
        
    </table>
    <br>
    <a href="form_registrasi.php" class="btn btn-md btn-info"><i class="fa fa-reply"></i> Kembali</a>

                </div>
    
            </div>
        </div>
    </div>
</body>
</html>