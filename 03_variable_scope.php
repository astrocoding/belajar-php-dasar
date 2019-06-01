<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar Dasar PHP 3</title>
</head>
<body>
  <?php
    // CONTOH GLOBAL SCOPE
    $tank = "Panzer VIII Maus"; // Global scope

    function tank() {
      echo $tank; // Akan error
    }

    tank();

    // CONTOH LOCAL SCOPE
    function tank1() {
      $tank1 = "Tiger II"; // Local scope
      echo $tank1 . "<br>";
    }

    tank1();
    echo $tank1; // Akan error

    // CONTOH STATIC SCOPE
    function tank2() {
      static $tank2 = "T-34"; // Static scope
      echo $tank2;
    }
    
    tank2();

    echo $tank2; // Akan error
  ?>
</body>
</html>