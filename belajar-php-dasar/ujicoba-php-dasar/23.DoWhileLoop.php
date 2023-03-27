<?php

$angka = 10;

do {
    echo "hallo angka ke-$angka" . PHP_EOL;
    $angka++;
} while ($angka <= 1);
//  kondisi bernilai salah

$angka = 17;
do {
    echo "ini adalah angka ke-$angka" . PHP_EOL;
    $angka--;
} while ($angka >= 1);