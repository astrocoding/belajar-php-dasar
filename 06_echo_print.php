<?php
  // Output dasar dengan echo
  echo "<h1>Hello, Friends!</h1>";
  echo "This is a simple PHP program.<br>";

  // echo memungkinkan kita untuk memiliki parameter lebih dari satu, sedangkan print tidak
  echo "This ", "string ", "has ", "multiple ", "parameters.<br>";

  // Ouput variable echo
  $txt1 = "Learn PHP Test ";
  $txt2 = "W3Schools.com";
  $x = 5;
  $y = 15;

  echo "<h2>" . $txt1 . "</h2>";
  echo "<h3>$txt2</h3>";
  echo $x + $y;

  // Output dasar dengan print
  print "<h1>Hello, Print!</h1>";
  print("This is a simple PHP program.<br>"); // print bisa menggunakan tanda kurung

  // Output variable print
  print "<h2>" . $txt1 . "</h2>";
  print "<h3>$txt2</h3>";
  print chop($txt1 . "<br>"); // print bisa menggunakan fungsi sama seperti echo, chop() adalah fungsi untuk menghapus spasi di akhir string
  echo chop($txt2);
?>