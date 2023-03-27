<?php

// selain terdapat string function untuk memanipulasi data string
// php juga mempunyai array function untuk memanipulasi data array
// jumlah functionnya pun banyak, untuk melihat lebih detail kita bisa melihatnya di situs resmi-nya
// https://www.php.net/manual/en/ref.array.php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// function array map adalah merubah data array menjadi array data baru 
// menyesuaikan dengan function yang kita panggil diparameter pertama
// array_map terdapat 2 parameter, pertama yaitu callback-nya (callable) dan kedua yaitu data arraynya
// kita bisa menyimpan result atau data yang diolah dengan callbacknya ke variable baru

// contoh pembuatan function untuk array map
$mapFunction = fn(int $nilai) => $nilai * 10;

$dataResult = array_map($mapFunction, $data); 
$dataResult = array_map(fn(int $nilai) => $nilai * 10, $data); // kita juga bisa langsung menuliskan function diparameternya
// untuk parameter pertama kita bisa buat function terlebih dahulu lalu dijadikan value variable
// ataupun memasukan functionnya secara langsung
// nantinya kita return kembali data barunya dan tangkap menggunakan variable
var_dump($dataResult);

// kesimpulannya adalah
// lebih ke bagaimana data sebelumnya kita rubah menggunakan function callable
// nantinya data yang baru akan me-returnkan value dan kita tangkap dengan variable

rsort($data);
// rsort digunakan untuk mengurutkan data namun secara desc (atau terbalik)
// parameter dari rsort adalah array yang akan kita tampilkan secara desc
var_dump($data);

sort($data);
// sort digunakan untuk mengurutkan data secara asc (berurutan)
// parameter dari sort adalah array yang akan kita tampilkan secara asc
var_dump($data);

var_dump(array_keys($data));
// array_keys digunakan untuk mengambil keys dari array yang kita panggil
// jika keys berupa index, maka nilai index yang akan diambil
// jika keys berupa string layaknya map, maka yang akan diambil adalah key nya yang berupa string tadi

var_dump(array_values($data));
// array_values digunakan untuk mengambil data value dari array yang kita panggil

// kita coba menggunakan array map

$person = [
    "first_name" => "Fadhil",
    "last_name" => "Muhammad"
];

var_dump(array_keys($person));
// array_keys akan menampilkan keys dari arraynya
var_dump(array_values($person));
// array_values akan menampilkan values dari arraynya

// masih banyak lagi array function di php
// ini merupakan bahan kecilnya saja
// selebihnya bisa kita check di situs resmi-nya