<?php
  // Inisialisasi array kosong
  $arr = array();
  $buah = [];
  // Menambahkan elemen ke array
  $arr[0] = 1;
  $arr[1] = 2;
  $arr[2] = 3;

  var_dump($arr);
  echo "<hr>";

  // Menambahkan elemen ke array
  $buah[1] = "Apel";
  $buah[0] = "Jeruk";

  var_dump($buah);
  echo "<hr> $buah[0] <br>";

  // Looping array dengan foreach
  echo "<hr> Looping Foreach <br>";
  foreach ($buah as $items) {
    echo $items . "<br>";
  }

  // Foreach dengan key
  foreach ($buah as $key => $items) {
    echo "Key: $key, Value: $items <br>";
  }

  // Isi array berbeda tipe data
  $item = ["satu", 2, 3.5, true];
  var_dump($item);

  $setup = array("Laptop", "Mouse", "Keyboard");
  echo count($setup) . "<br>";

  echo "<hr> Looping For <br>";
  // Looping array dengan for
  for($i = 0; $i < count($setup); $i++) { // Kenapa dengan < ? karena index array dimulai dari 0
    echo "$i:" . $setup[$i] . "<br>";
  }

  echo "<hr> Looping While <br>";

  // Looping array dengan while
  $i = 0;
  while($i < count($setup)) {
    echo "$i: " . $setup[$i] . "<br>";
    $i++;
  }


  echo "<hr> Looping Do While <br>";
  $i = 0;
  do {
    echo "$i: " . $setup[$i] . "<br>";
    $i++;
  } while($i < count($setup));

  // Menghapus elemen array dengan unset
  unset($setup[1]);
  var_dump($setup);
  
  echo "<pre>";
  print_r($setup); // Menampilkan array dengan format yang lebih mudah dibaca
  echo "</pre>";

  $setup[2] = "Monitor"; // Apabila index sudah ada maka akan mengganti value index tersebut
  print_r($setup);

  

?>