<?php

  // Fungsi User Defined Functions (UDF)

  // 1. Fungsi yang tidak mengembalikan nilai
  $nama = "Zaenal Alfian";
  function welcome($name) {
    echo "Welcome $name <br>";
  }

  welcome($nama);
  var_dump(welcome($nama)); // Fungsi yang tidak mengembalikan nilai akan mengembalikan NULL

  // 2. Fungsi yang mengembalikan nilai
  function sum($a, $b) {
    return $a + $b;
  }

  echo sum(1, 2) . "<br>";

  function hitungTotalHarga($harga, $diskon) {
    $totalDiskon = $harga * ($diskon / 100);
    $totalHarga = $harga - $totalDiskon;

    return $totalHarga;
  }

  $total = hitungTotalHarga(100000, 10);
  echo "Total Harga + Diskon: $total <br>";

  function hitungUmur($tahunLahir, $tahunSekarang) {
    $umur = $tahunSekarang - $tahunLahir;

    return $umur;
  }

  $umur = hitungUmur(2003, 2024);
  echo $umur, " tahun", "<br>";

  // 3. Fungsi dengan nilai default
  function salam($nama = "Zaenal Alfian") { // Apabila tidak ada parameter yang dikirimkan, maka nilai default akan digunakan
    return "Halo $nama <br>";
  }

  echo salam();

  // 5. Memanggil fungsi di dalam fungsi
  function hitungLuasPersegi($panjang, $lebar) {
    return $panjang * $lebar;
  }

  echo hitungLuasPersegi(2, 3), "<br>";

  function hitungVolumeBalok($panjang, $lebar, $tinggi) {
    return hitungLuasPersegi($panjang, $lebar) * $tinggi;
  }

  echo hitungVolumeBalok(2, 3, 4), "<br>";

  // 6. Fungsi dengan parameter array
  function hitungRataRata($arr) {
    $total = 0;
    $count = count($arr);

    for ($i = 0; $i < $count; $i++) {
      $total += $arr[$i];
    }

    return $total / $count;
  }

  $arr = [100,25,67,80,80,88,75];
  echo hitungRataRata($arr);

  // 7. Fungsi rekurisif
  function faktorial($n) {
    if ($n == 0) { // base case, dan mau itu n == 0 atau n < 2 hasilnya sama
      return 1;
    } else {
      return $n * faktorial($n - 1);
    }
  }

  echo "<hr>Faktorial 5 adalah ", faktorial(20);


?>