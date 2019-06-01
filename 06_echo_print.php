<?php
  // Output dasar dengan echo
  echo "<h1>Hello, Friends!</h1>";
  echo "This is a simple PHP program.<br>";
  echo("echo bisa menggunakan tanda kurung.<br>"); // echo bisa menggunakan tanda kurung

  // ?NOTE: Fungsi echo() tidak akan mengembalikan apa-apa setelah dieksekusi. Dia hanya bertugas menampilkan teks saja.

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

  // ?NOTE: Fungsi print() akan mengembalikan nilai 1 setelah dieksekusi. Jadi, print() bisa digunakan dalam ekspresi.
  $cetak = print("print bisa digunakan dalam ekspresi.<br>");
  echo $cetak; // Output: 1
  echo "<hr>";

  // Output variable print
  print "<h2>" . $txt1 . "</h2>";
  print "<h3>$txt2</h3>";
  print chop($txt1 . "<br>"); // print bisa menggunakan fungsi sama seperti echo, chop() adalah fungsi untuk menghapus spasi di akhir string
  echo chop($txt2);

  // ?NOTE: echo lebih cepat daripada print, karena echo tidak mengembalikan nilai.
  print "<hr>";
  // Output dengan printf
  printf("There are %d items in your basket.<br>", $x); // %d adalah format specifier/placeholder untuk integer
  printf("The %s contains %d monkeys.<br>", "tree", $y); // %s adalah format specifier/placeholder untuk string
  printf("The %f monkeys are in the %s.<br>", 0.5, "tree"); // %f adalah format specifier/planceholder untuk float
  printf("Boolean: %b<br><hr>", true); // %b adalah format specifier/placeholder untuk boolean

  // misalkan kita punya bilangan dengan notasi E seperti ini
  $harga = 100000;

  // jika kita cetak dengan echo:
  echo "Harganya adalah Rp $harga <br>";

  // jika kita cetak dengan printf
  printf("Harganya adalah Rp %.3f <br>", $harga);

  // ?NOTE: printf() adalah fungsi yang memungkinkan kita untuk menentukan format output yang kita inginkan. Format ini bisa berupa string, integer, float, dan boolean.
  
  // Mencetak ' karakter atau " karakter
  echo 'I\'m a programmer <br>'; // Ini disebut escape character
  echo "Ini adalah \"kutip dua\"";
?>