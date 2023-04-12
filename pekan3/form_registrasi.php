<?php
$majors = ['Sistem Informasi', 'Tekhnik Informatika', 'Bisnis Digital'];
$skills = [
  'HTML' => 10,
  'CSS' => 10,
  'javaScript' => 20,
  'RWD Bootstrap' => 30,
  'PHP' => 30,
  'Python' => 30,
  'java' => 50
];
$domicilies = ['Jakarta', 'Depok', 'Bogor', 'Tangerang', 'Bekasi', 'Lainnya'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Registrasi</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h2>From Registrasi IT Club Data Science</h2>
    <hr>
    <form method="POST" action="proses_registrasi.php">
      <div class="form-group row">
        <label for="nim" class="col-4 col-form-label">NIM</label>
        <div class="col-8">
          <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" required="required" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
          <input id="nama" name="nama" placeholder="Masukkan Nama " type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4">Jenis Kelamin</label>
        <div class="col-8">
          <div class="custom-control custom-radio custom-control-inline">
            <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="laki-laki" required="required">
            <label for="gender_0" class="custom-control-label">Laki-laki</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="perempuan" required="required">
            <label for="gender_1" class="custom-control-label">Perempuan</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="prodi" class="col-4 col-form-label">Program Studi</label>
        <div class="col-8">
          <select id="prodi" name="prodi" class="custom-select" required="required">
            <?php foreach ($majors as $major) : ?>
              <option value="<?php echo $major ?>"> <?php echo $major ?></option>
            <?php endforeach ?>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4">Skill Programming</label>
        <div class="col-8">
          <?php foreach ($skills as $key => $value) : ?>
            <div class="custom-control custom-checkbox custom-control-inline">
              <input name="skill[]" id="<?php echo $key ?>" type="checkbox" class="custom-control-input" value="<?php echo $key ?>">
              <label for="<?php echo $key ?>" class="custom-control-label"><?php echo $key ?></label>
            </div>
          <?php endforeach ?>
        </div>
      </div>
      <div class="form-group row">
        <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label>
        <div class="col-8">
          <select id="domisili" name="domisili" class="custom-select" required="required">
            <?php foreach ($domicilies as $domicile) : ?>
              <option value="<?= $domicile ?>"><?php echo $domicile ?></option>
            <?php endforeach ?>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
</body>

</html>