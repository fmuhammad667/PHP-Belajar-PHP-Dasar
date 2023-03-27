<?php

// Dot Operator
$nama = "Mitsurugi Kyouya";
define("KOTA", "Bandung");

echo "Nama : " . $nama . PHP_EOL;
echo "TTL : " . KOTA . ", " .  16 . "-" . "Juli" . "-" . 2003 . "\n"; 

// Konversi ke Number dan sebaliknya
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)16.9;
var_dump($valueInt);

$valueFloat = (float)"16.16";
var_dump($valueFloat);

// Mengakses Karakter
$name = "KyouyA";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;
echo $name[5] . PHP_EOL;

// unset($name[0]); // Error karena unset hanya untuk menghapus index atau value array
$name[2] = "i"; // bisa dirubah
// $name[] = "i"; // Error
echo $name . "\n";

// Variable Parsing
$angka = 11;
$myName = "Kyouya";

echo "Hello $myName, Selamat Belajar PHP Dasar, OOP, Database, Web, Composer" . PHP_EOL;
$intro = "Hallo nomor induk saya adalah" . $angka;
var_dump($intro);

// Curly Brace
$buku = "Book";
echo "many {$buku}s" . PHP_EOL;