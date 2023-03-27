<?php

// diphp kita bisa melakukan operasi matematika, menggunakan operator aritmatika
// baik itu penjumlahan, pengurangan, perkalian, pembagian, dan lain sebagainya
// termasuk melakukan konversi dari min ke positif atau sebaliknya

$a = 10;
$b = 10;

$result = $a * $b;
var_dump($result);

// konversi ke minus
$resultNegative = -$result;
var_dump($resultNegative);

$resultPositive = +$result;
var_dump($resultPositive);

$hasilModulo = 100 % 3;
var_dump($hasilModulo);
