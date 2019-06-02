<?php
  // Conditional Statement
  // if
  $nilai = 80;

  if ($nilai >= 75) {
    echo "Selamat, Anda Lulus!<br>";
  }

  // if else
  $nilai = 60;

  if ($nilai >= 75) {
    echo "Selamat, Anda Lulus!<br>";
  } else {
    echo "Maaf, Anda Gagal!<br>";
  }

  // if else if
  $nilai = 60;

  if ($nilai >= 75) {
    echo "Selamat, Anda Lulus!<br>";
  } elseif ($nilai >= 60) { // antara elseif dan else if sama saja
    echo "Anda Masuk Remedial!<br>";
  } else {
    echo "Maaf, Anda Gagal!<br>";
  }

  // nested if
  echo "<hr>";
  $nilai = 80;
  $absen = 80;
  if ($nilai >= 0) {
    if ($absen >= 75) {
      echo "Selamat, Anda Lulus!<br>";
    } else {
      echo "Maaf, Anda Gagal!<br>";
    }
  } else {
    echo "Maaf, Anda Gagal!<br>";
  }


  // switch case
  $nilai = "A";

  switch ($nilai) {
    case "A":
      echo "Sangat Baik!<br>";
      break;
    case "B":
      echo "Baik!<br>";
      break;
    case "C":
      echo "Cukup!<br>";
      break;
    case "D":
      echo "Kurang!<br>";
      break;
    default:
      echo "Maaf, format nilai tidak sesuai!<br>";
  }

  echo "<hr>";
  // ternary operator
  $nilai = 80;
  $hasil = $nilai >= 75 ? "Selamat, Anda Lulus!<br>" : "Maaf, Anda Gagal!<br>";
  echo $hasil;
?>