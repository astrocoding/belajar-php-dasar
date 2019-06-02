<?php
  // ?NOTE: Ada 7 jenis operator di PHP, yaitu:
  /**
   * 1. Operator Aritmatika
   * 2. Operator Assignment
   * 3. Operator Perbandingan/Relasi
   * 4. Operator Logika
   * 5. Operator Increment dan Decrement
   * 6. Operator bitwise
   * 7. Operator Ternary
   */

  // Operator Aritmatika
  $a = 10;
  $b = 5;

  $c = $a + $b; # Penjumlahan
  $d = $a - $b; # Pengurangan
  $e = $a * $b; # Perkalian
  $f = $a / $b; # Pembagian
  $g = $a % $b; # Modulus
  $h = $a ** $b; # Pangkat

  printf("Angka pertama: %d <br> Angka kedua: %d <br>", $a, $b);
  printf("Hasil penjumlahan: %d <br>", $c);
  printf("Hasil pengurangan: %d <br>", $d);
  printf("Hasil perkalian: %d <br>", $e);
  printf("Hasil pembagian: %d <br>", $f);
  printf("Hasil modulus: %d <br>", $g);
  printf("Hasil pangkat: %d <br>", $h);
  echo "<hr>";

  // Operator Assignment
  $nilai = 10; // Operator assignment =
  $teks = "Halo, dunia!";

  $nilai += 5; // $nilai = $nilai + 5
  $nilai -= 5; // $nilai = $nilai - 5
  $nilai *= 5; // $nilai = $nilai * 5
  $nilai /= 5; // $nilai = $nilai / 5
  $nilai %= 5; // $nilai = $nilai % 5
  $nilai **= 5; // $nilai = $nilai ** 5
  $teks .= " Semoga hari ini menyenangkan!"; // $teks = $teks . " Semoga hari ini menyenangkan!"

  // Operator Perbandingan/Relasi
  $x = 10;
  $y = 5;

  // ?NOTE: Hasil dari operator perbandingan adalah boolean, yaitu true atau false.
  $hasil1 = $x == $y; // Sama dengan
  $hasil2 = $x != $y; // Tidak sama dengan
  $hasil3 = $x > $y; // Lebih besar dari
  $hasil4 = $x < $y; // Lebih kecil dari
  $hasil5 = $x >= $y; // Lebih besar atau sama dengan
  $hasil6 = $x <= $y; // Lebih kecil atau sama dengan
  $hasil7 = $x === $y; // Identik
  $hasil8 = $x !== $y; // Tidak identik

  printf("Apakah %d sama dengan %d? %b <br>", $x, $y, $hasil1);
  printf("Apakah %d tidak sama dengan %d? %b <br>", $x, $y, $hasil2);
  printf("Apakah %d lebih besar dari %d? %b <br>", $x, $y, $hasil3);
  printf("Apakah %d lebih kecil dari %d? %b <br>", $x, $y, $hasil4);
  printf("Apakah %d lebih besar atau sama dengan %d? %b <br>", $x, $y, $hasil5);
  printf("Apakah %d lebih kecil atau sama dengan %d? %b <br>", $x, $y, $hasil6);
  printf("Apakah %d identik dengan %d? %b <br>", $x, $y, $hasil7);
  printf("Apakah %d tidak identik dengan %d? %b <br>", $x, $y, $hasil8);
  echo "<hr>";

  // Operator Logika

  $nilai1 = true;
  $nilai2 = false;

  $hasil9 = $nilai1 && $nilai2; // AND
  $hasil10 = $nilai1 || $nilai2; // OR
  $hasil11 = !$nilai1; // NOT

  printf("Apakah %b AND %b? %b <br>", $nilai1, $nilai2, $hasil9);
  printf("Apakah %b OR %b? %b <br>", $nilai1, $nilai2, $hasil10);
  printf("Apakah NOT %b? %b <br>", $nilai1, $hasil11);
  echo "<hr>";

  // Operator Increment dan Decrement
  $i = 10;
  $j = 10;

  $i++; // Increment
  $j--; // Decrement
  $i++;
  $j--;

  printf("Nilai i: %d <br>", $i);
  printf("Nilai j: %d <br>", $j);
  echo "<hr>";

  // Operator Bitwise
  $a = 60;
  $b = 13;

  // bitwise AND
  $c = $a & $b;
  echo "$a & $b = $c";
  echo "<br>";

  // bitwise OR
  $c = $a | $b;
  echo "$a | $b = $c";
  echo "<br>";

  // bitwise XOR
  $c = $a ^ $b;
  echo "$a ^ $b = $c";
  echo "<br>";

  // Shift Left
  $c = $a << $b;
  echo "$a << $b = $c";
  echo "<br>";

  // Shift Right
  $c = $a >> $b;
  echo "$a >> $b = $c";
  echo "<br>";

  echo "<hr>";

  // Operator Ternary
  $suka = true;

  // menggunakan operator ternary
  $jawab = $suka ? "iya": "tidak";

  // menampilkan jawaban
  echo $jawab;

?>