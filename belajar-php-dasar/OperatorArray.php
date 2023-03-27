<?php

// berbeda dengan bahasa pemrograman kebanyakan, php mendukung operasi pada array
// untuk operatornya sendiri tidak jauh berbeda dengan sebelumnya
// namun yang membedakan adalah pengoperasiannya
// terdapat beberapa operator untuk array seperti union, equality, identity, inequality, dan non-identity

// union
// digunakan untuk menggabungkan 2 buah array
$fist = [
    "firstName" => "Fadhil"
];

$last = [
    "firstName" => "Kyouya",
    "lastName" => "Muhammad"
];

$namaLengkap = $fist + $fist;
var_dump($namaLengkap);
$namaLengkap = $last + $fist; 
var_dump($namaLengkap);

// bagaimana semisal di variable array map lain terdapat key yang sama ?
// maka hasilnya tergantung dari variable mana yang dulu diasign
// sedangkan untuk key yang sama akan di-ignore

$a = [
    "firstName" => "Fadhil",
    "lastName" => "Muhammad"
];

$b = [
    "lastName" => "Muhammad",
    "firstName" => "Fadhil"
];

// equality
// digunakan untuk melakukan perbandingan apakah key-value antara array a dan b sama
var_dump($a == $b);

// identity
// digunakan untuk melakukan perbandingan apakah key-value antara array a dan b sama, 
// dilakukan pengecheckannya pun pada posisi
var_dump($a === $b);

// inequality
// digunakan untuk melakukan perbandingan apakah key-value antara array a dan b tidak sama
var_dump($a != $b);

// nonidentity
// digunakan untuk melakukan perbadingan apakah key-value antara array a dan b tidak sama
// dilakukan pengecheckannya pun pada posisi
var_dump($a !== $b);