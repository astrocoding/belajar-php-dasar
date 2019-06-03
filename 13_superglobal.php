<?php
  // URL: http://localhost/13_superglobal.php?name=Zaenal&age=17
$name = $_GET['name']; // Zaenal
$age = $_GET['age']; // 17

echo "Nama: $name <br>"; // akan null apabila tidak ada parameter yang dikirimkan
echo "Umur: $age <br>";

var_dump($_GET);
var_dump($name);

setcookie("user", "Zaenal Alfian", time() + (86400 * 30)); // Set cookie berfungsi untuk menyimpan data pada browser
echo $_COOKIE['user']; // Zaenal Alfian

$path = $_ENV['PATH']; // Tidak akan muncul apabila dijalankan di XAMPP
var_dump($path); // NULL

$ipAddress = $_SERVER['REMOTE_ADDR'];
$scriptName = $_SERVER['SCRIPT_NAME'];

echo "IP Address: $ipAddress <br>";
echo "Script Name: $scriptName <br>";

?>