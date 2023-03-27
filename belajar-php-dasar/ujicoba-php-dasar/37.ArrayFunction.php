<?php

// di-php terdapat juga function bawaan yang dapat digunakan untuk memanipulasi data array
// https://www.php.net/manual/en/ref.array.php

/* 
array_keys()        | mengambil semua keys milik array
array_values()      | mengambil semua values milik array
array_map()         | mengubah semua data array dengan callback/function
sort()              | mengurutkan data array
rsort()             | mengurutkan data array secara terbalik
shuffle()           | mengubah posisi data di array secara random
*/

$data = ["Fadhil", true, 16, 0.7, "Muhammad", false,];
$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

var_dump(array_keys($data));
var_dump(array_values($data));

rsort($angka);
var_dump($angka);

sort($angka);
var_dump($angka);

shuffle($angka);
var_dump($angka);

$func = fn(int $nomor) => $nomor * 2;

// array map
$hasil = array_map($func, $angka);
$hasil1 = array_map(fn(int $nilai) => $nilai * 10, $angka);
var_dump($hasil);
var_dump($hasil1);