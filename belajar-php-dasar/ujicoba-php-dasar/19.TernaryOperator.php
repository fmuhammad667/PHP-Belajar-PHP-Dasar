<?php

// tanpa menggunakan ternary operator
$fadhil = false;

if ($fadhil == true) {
    $salam = "Sapa dan jabat tangan";
} else {
    $salam = "Minta maaf, lalu pergi";
}

echo $salam. PHP_EOL;

// menggunakan ternary operator
$dosen = false;
$sapa = $dosen == true ? "Sapa dan tanyakan kondisi" : "Hiraukan";

echo $sapa . PHP_EOL;

$angka = 60;
$hasil = $angka >= 70 ? "Benar" : "Salah";
echo $hasil . PHP_EOL;