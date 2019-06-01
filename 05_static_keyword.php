<?php
  function test() {
    static $a = 10; // Static keyword adalah cara untuk membuat variabel tetap meskipun fungsi dijalankan berkali-kali
    echo $a;
    $a++; // Increment $a
  }

  test(); // nilai initial $a = 10
  echo "<br>";
  test(); // Static keyword membuat nilai variabel tetap meskipun fungsi dijalankan berkali-kali
  echo "<br>";
  test();

?>