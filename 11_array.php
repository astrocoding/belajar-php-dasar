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
  echo "<hr>";

  // Menghapus elemen array dengan array_splice
  array_splice($setup, 1, 1); // Menghapus 1 elemen mulai dari index 1
  print_r($setup);
  echo "<hr>";

  // Menambahkan elemen array dengan array_splice
  array_splice($setup, 1, 0, "Mouse"); // Menambahkan elemen "Mouse" pada index 1, 0 di sini menunjukkan tidak menghapus elemen
  print_r($setup);
  var_dump($setup);
  echo "<hr>";

  // Menggabungkan array
  $arr1 = [1, 2, 3];
  $arr2 = [4, 5, 6];
  $arr3 = array_merge($arr1, $arr2);

  echo "<pre>";
  print_r($arr3);
  echo "</pre>";

  // Mengurutkan array
  $arr4 = [3, 1, 2];
  print_r($arr4);
  sort($arr4);
  echo "<pre>";
  print_r($arr4);
  echo "</pre>";

  // Mengurutkan array secara descending
  rsort($arr4); // Mengurutkan array secara descending, r berarti reverse
  echo "<pre>";
  print_r($arr4);
  echo "</pre>";

  // Array asosiatif
  $data = [
    "nama" => "Zaenal Alfian", // Key => Value
    "umur" => 17, // => adalah assignment pada array, untuk mengisi value
    "pekerjaan" => "WengDev"
  ];

  echo "<h2>". $data["nama"] ."</h2>";
  echo "<h2>Umur: " . $data["umur"] . "</h2>";
  print("<h2>Pekerjaan: " . $data["pekerjaan"] . "</h2>");
  print_r($data);

  // Cara lain untuk membuat array asosiatif
  $email["subjek"] = "Hello, mom!";
  $email["pengirim"] = "zaenalalfian@gmail.com";
  $email["penerima"] = "mommy@gmail.com";
  $email["pesan"] = "Hello, mom! Good morning!";

  echo "<pre>";
  print_r($email);
  echo "</pre>";
  print_r($email);

  // Looping array asosiatif
  echo "<hr> Looping Array Asosiatif <br>";
  foreach ($email as $key => $value) {
    echo "$key: $value <br>";
  }
  echo "<hr>";

  // Array multidimensi
  $data = [
    ["Zaenal Alfian", 17, "WengDev"],
    ["Zaenal", 17, "WengDev"],
    ["Alfian", 17, "WengDev"]
  ];
  
  echo $data[0][0] . "<br>"; // Output: Zaenal Alfian

  // Array multidimensi asosiatif
  $artikel = [
    [
      "judul" => "Belajar PHP",
      "penulis" => "Zaenal Alfian",
      "isi" => "Belajar PHP itu mudah"
    ],
    [
      "judul" => "Belajar HTML",
      "penulis" => "Zaenal Alfian",
      "isi" => "Belajar HTML itu mudah"
    ]
  ];

  echo $artikel[0]["judul"] . "<br>"; // Output: Belajar PHP
  echo $artikel[1]["judul"] . "<br>"; // Output: Belajar HTML

?>