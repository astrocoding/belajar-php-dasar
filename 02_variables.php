<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar PHP Dasar 2</title>
</head>
<body>
  <?php
    $tank = "Panzer VIII Maus";
    $tank1 = "Tiger II";
    $Tank = "T-34";
    $TANK = "M4 Sherman";
    $_tank = "Leopard 2A7";

    echo "Tank terberat di dunia adalah $tank<br>";
    echo "Tank terberat di dunia adalah {$TANK} <br> $tank<br>";
    echo "Tank punyaku adalah " . $tank . "<br>";

    // ?NOTE: Variabel di PHP bersifat case-sensitive, artinya huruf besar dan kecil dianggap berbeda.

    // ?NOTE: Variabel di PHP tidak boleh diawali dengan angka, dan tidak boleh mengandung spasi.

    // ?NOTE: Variabel di PHP tidak boleh mengandung karakter khusus, kecuali underscore (_).

    // ?NOTE: Variabel di PHP bersifat dinamis, artinya kita bisa mengubah tipe data variabel kapan saja.

    // ?NOTE: Variabel di PHP bisa diawali dengan underscore (_) atau huruf, kemudian diikuti dengan huruf, angka, atau underscore (_).

    // Konstanta di PHP
    define("NAMA", "John Doe");
    const UMUR = 30;
    const PHI = 3.14;

    // membuat konstanta dengan fungsi define()
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'petanikode');
    define('DB_PASS', 'R4Hasia');
    define('DB_NAME', 'belajar');

    // membuat konstanta dengan kata kunci const
    const API_KEY = "1234";

    # PHI = 0; // Error, konstanta tidak bisa diubah

    echo "Ini adalah " . NAMA . "<br>";
  
  ?>

  <p>Tank: <?= $_tank ?></p>
  <p>Tank: <?php echo $tank1 ?></p>
</body>
</html>