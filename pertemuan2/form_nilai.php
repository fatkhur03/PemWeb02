    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>

    <body>
        <h1 style="padding: 10px;">Nilai Form Siswa</h1>
        <hr>
        <div class="container">
            <form method="GET" action="proses_nilai.php">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                    <div class="col-6">
                        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                    <div class="col-6">
                        <select id="matkul" name="matkul" class="custom-select">
                            <option value="WEB">Pemograman Web</option>
                            <option value="DDP">Dasar Dasar Pemograman</option>
                            <option value="UIUX">UIUX</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uts" class="col-4 col-form-label">Nilai UTS</label>
                    <div class="col-4">
                        <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uas" class="col-4 col-form-label">Nilai UAS</label>
                    <div class="col-4">
                        <input id="uas" name="uas" placeholder="Nilai UAS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label>
                    <div class="col-4">
                        <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="text" class="form-control">
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