<?php
                $nama = $_POST['nama'];
                $matkul = $_POST['matkul'];
                $uts = $_POST['uts'];
                $uas = $_POST['uas'];
                $tugas = $_POST['tugas'];
                $grade = ($uts + $uas + $tugas) / 3;

                echo '<br>Nama : ' . $nama;
                echo '<br>Mata Kuliah : ' . $matkul;
                echo '<br>Nilai UTS : ' . $uts;
                echo '<br>Nilai UAS : ' . $uas;
                echo '<br>Nilai Tugas : ' . $tugas;
                
                echo "<br>Rata-rata : " . round(($uts + $uas + $tugas) / 3);
                echo("<br>");
                if ($grade <= 35) {
                    echo "Grade: E";
                  } elseif ($grade <= 55) {
                    echo "Grade: D";
                  } elseif ($grade <= 69) {
                    echo "Grade: C";
                  } elseif ($grade <= 84) {
                    echo "Grade: B";
                  } elseif ($grade <= 100) {
                    echo "Grade: A";
                  } else {
                    echo "Invalid";
                  }
            ?>