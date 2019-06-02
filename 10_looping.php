<?php
  /**
   * ?NOTE: Ada 4 jenis perulangan di PHP, yaitu:
   * 1. for
   * 2. while
   * 3. do...while
   * 4. foreach
   * 
   * ?NOTE: Kemudian dikategorikan, ada 2 jenis perulangan dalam pemrograman:
   * 1. Perulangan yang memiliki jumlah perulangan yang sudah diketahui (Counted Loop)
   * 2. Perulangan yang memiliki jumlah perulangan yang tidak diketahui (Uncounted Loop)
   * 
   * Dan ada 2 pernyataan khusus, yaitu:
   * 1. break
   * 2. continue
   */

  // Perulangan for (Counted Loop)
  for ($i = 0; $i < 5; $i++) {
    echo "Perulangan ke-$i <br>";
  }

  echo "<hr>";

  // Perulangan while (Uncounted Loop) tapi bisa dijadikan Counted Loop
  $i = 0;
  while ($i < 5) {
    echo "Perulangan ke-$i <br>";
    $i++;
  }

  echo "<hr>";

  // Perulangan do...while (Uncounted Loop)
  $ulangi = 0;
  do {
    echo "Perulangan ke-$ulangi <br>";
    $ulangi++;
  } while ($ulangi < 5);

  echo "<hr>";

  // Perulangan foreach (Counted Loop), sama seperti for tapi digunakan untuk array
  $buah = ["Apel", "Jeruk", "Mangga", "Pisang"];
  foreach ($buah as $item) {
    echo "Ini buah: ", $item, "<br>";
  }

  var_dump($buah); // Melihat isi array dan tipe datanya

  // ?FYI: var_dump adalah fungsi PHP yang digunakan untuk menampilkan informasi tipe data dan nilai dari variabel.

  // Perulangan foreach dengan key
  $buah = ["Apel", "Jeruk", "Mangga", "Pisang"];
  foreach ($buah as $key => $item) { // $key adalah index array, $item adalah value array
    echo "Kunci: ", $key, " => ", "Ini buah: ", $item, "<br>";
  }

  echo "<hr>";

  // Nested Loop
  for ($i = 0; $i < 5; $i++) { // Looping pertama, loop ini akan diulang sebanyak 5 kali
    for ($j = 0; $j < 5; $j++) { // Looping kedua, loop ini akan diulang sebanyak 5 kali
      echo "Ini perulangan ke-$i dan ke-$j <br>";
      # var_dump($j); // Melihat isi variabel j dan tipe datanya
    }
  }

  var_dump($i); // Melihat isi variabel i dan tipe datanya

  echo "<hr>";

  // Segitiga bintang dengan nested loop
  for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
      echo "*";
    }
    echo "<br>";
  }


?>