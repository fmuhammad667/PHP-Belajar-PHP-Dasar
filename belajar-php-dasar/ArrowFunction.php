<?php

// arrow function dikenalkan diversi php 7.4 ini merupakan bentuk sederhana dari anonymous function
// sebenarnya arrow function dan anonymous function adalah dua hal yang sama
// namun yang mebedakan untuk arrow function kita bisa mengakses variable secara global
// berbeda dengan anonymous function 
// yang mana kita perlu buat secara manual untuk mengakses variable global menggunakan keyword "use"
// untuk membuat arrow function caranya kita gunakan keyword "fn" disertai tanda kurung, lalu diikuti tanda panah (=>)
// arrow function hanya bisa digunakan untuk fungsi yang simpel dan tidak bisa digunakan untuk data yang kompleks
// default dari arrow function yaitu mengembalikan nilai, namun kita tidak perlu menuliskan return secara manual
// jadi untuk membuat arrow function kita perlu membuat anonymous function yang mengembalikan data

$namaAwal = "Fadhil";
$namaAkhir = "Muhammad";

// jika menggunakan anonymous function
$anonymousFunction = function () use ($namaAwal,$namaAkhir): string {
    return "Hello $namaAwal $namaAkhir" . PHP_EOL;
}; // kita perlu menggunakan kata kunci use dan juga menuliskna return type declaration

// menggunakan arrow function
$arrowFunction = fn() => "Hello $namaAwal $namaAkhir" . PHP_EOL;
// kita tidak perlu menuliskan kata kunci return dan juga tidak perlu menuliskan keyword use

// jika kita printout maka hasilnya sama
echo $anonymousFunction();
echo $arrowFunction();

// ini bisa kita gunakan semisal kita ingin membuat sebuah anonymous function dan mengembalikan data
// dibanding menggunakan anonymous function kita bisa memilih opsi untuk menggunakan arrow function