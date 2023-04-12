<?php

/**
 * Tugas:
 * 1. Buat class Motor
 * 2. Isi atributnya: merk, bensin, topSpeed, cc
 * 3. dibuatkan cunstructnys
 * 4. Buat method `jalan` yang menerima parameter `jarak`.
 * Fungsi method berisi: mengurangi bensin sesuai jarak. 
 * Misal: 1liter untuk 30km
 */


 class Motor {
    public $merk;
    public $bensin;
    public $topSpeed;
    public $cc;
  
    public function __construct($merk, $bensin, $topSpeed, $cc) {
      $this->merk = $merk;
      $this->bensin = $bensin;
      $this->topSpeed = $topSpeed;
      $this->cc = $cc;
    }
  
    public function jalan($jarak) {
      $bensinDibutuhkan = $jarak / 30;
      if ($bensinDibutuhkan <= $this->bensin) {
        $this->bensin -= $bensinDibutuhkan;
        echo "Motor $this->merk jalan sejauh $jarak km dengan menggunakan $bensinDibutuhkan liter bensin.<br>";
      } else {
        echo "Bensin tidak cukup untuk menempuh jarak $jarak km.<br>";
      }
    }

    
  }

    $motorSaya = new Motor("Honda", 5, 120, 150);
    $motorSaya->jalan(60);
    $motorSaya->jalan(100);

  
?>
 