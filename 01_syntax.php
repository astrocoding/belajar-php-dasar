<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar PHP Dasar</title>
</head>
<body>
  <?php
    echo "Hello, friend! <hr>";

    // Komentar satu baris

    /*
      Komentar
      Banyak
      Baris
    */

    // Komentar di dalam baris kode
    $x = 5 /* + 15 */ + 5;
    echo $x;
    echo "<hr>";
    ECHO "Contoh penggunaan ECHO dan echo<br>"; // ECHO dan echo sama saja. Kenapa? Karena PHP bersifat case-insensitive
    Echo "Contoh teks dengan Echo<br>";
    echo "Contoh teks dengan echo<br><hr>";

    $tank = "Panzer VIII Maus";
    $tank1 = "Tiger II";

    echo "Tank terberat di dunia adalah $tank<br>"; // Ini adalah cara yang paling disarankan. Kenapa? Karena lebih mudah dibaca
    echo "Tank terberat di dunia adalah {$tank1} <br> $tank<br>";
    echo "Tank punyaku adalah " . $tank . "<br>"; // Ini adalah cara lain yang bisa digunakan

    echo "hello" // Apabila diakhiri dengan titik koma, maka tidak akan error
  ?>
</body>
</html>

<?php
    echo $Tank;
    echo $TANK;
?>