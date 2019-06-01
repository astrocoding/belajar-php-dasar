<?php
  $x = 10;
  $y = 20;

  function add() {
    global $x, $y, $z; // Global keyword adalah cara untuk mengakses variabel global di dalam fungsi
    $z = $x + $y;
  }

  add();
  echo $z;
  echo "<br>";
  echo "x = $x, y = $y, z = $z <br>";

  echo "<hr>";

  echo $GLOBALS['x']; // Cara lain untuk mengakses variabel global
  echo'<br>';
  echo $GLOBALS['y'] . "<br>";
  echo $GLOBALS['z'];
?>