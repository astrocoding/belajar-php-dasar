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
  
  ?>

  <p>Tank: <?= $_tank ?></p>
  <p>Tank: <?php echo $tank1 ?></p>
</body>
</html>