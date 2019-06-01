<?php
  // Tipe data char dan string
  $char = 'A'; // Tipe data char
  $string = "Hello, World!"; // Tipe data string

  // Tipe data integer
  $integer = 10; // Tipe data integer
  $nilai = 100;
  $poin = -100; // Tipe data integer bisa positif atau negatif

  // Tipe data float
  $float = 10.5; // Tipe data float
  $harga = 100000.50;
  $phi = 3.14; // Tipe data float berupa bilangan desimal
  $jarak = 1.5e3; // Tipe data float berupa bilangan desimal dengan notasi E
  echo $jarak . "<br>";
  echo sprintf("%f", $jarak) . "<br>";
  echo sprintf("%.3f", $jarak) . "<br>"; // batasi 3 angka di belakang koma


  // Tipe data boolean
  $benar = true; // Tipe data boolean
  $salah = false; // Tipe data boolean

  // Tipe data array
  $array = array("PHP", "Java", "Python", "C++"); // Tipe data array
  $array2 = ["HTML", "CSS", "JavaScript"]; // Penulisan array yang lebih sederhana

  // Tipe data object
  # $user = new User(); // Setiap object adalah instance dari class, penulisan object menggunakan kata kunci new

  // Tipe data NULL
  $kosong = NULL; // Tipe data NULL

  // ?NOTE: Konversi tipe data bisa dilakukan dengan cara casting, yaitu dengan menambahkan tipe data di depan variabel yang akan diubah tipe datanya.

  // Contoh casting tipe data
  $angka = 10;
  $angka_string = (string) $angka; // Mengubah tipe data integer menjadi string
  echo $angka_string . "<br>";
  var_dump($angka_string); // var_dump adalah fungsi untuk menampilkan informasi tipe data dan nilai variabel

  $a = "32";
  $a = (int) $a; // ubah nilai a menjadi integer
  $a = (float) $a; // ubah nilai a menjadi float

  // Menghapus variabel di memori dengan unset()
  // membuat variabel $tmp
$tmp = 2901;

// menghapus variabel $tmp
unset($tmp);

// mencoba mengakses variabel $tmp
// echo $tmp;

?>