<?php

// kita tahu sebelumnya bahwa data kosong di php direpersentasikan dengan data null
// dan biasanya di php kita sering melakukan pengecheckan menggunakan isset
// untuk mengecheck apakah ada variable dengan nama demikian, dan apakah ada valuenya
// untuk mengechecknya kita bisa menggunakan isset 
// kita tidak menggunakan is_null karena jika menggunakan is_null semisal variable tidak ada maka akan terjadi error
// namun untungnya pengecheckan tersebut tidak terlalu ribet mengingat di php terdapat fitur Null coalescing operator

// tanpa menggunakan Null Coalescing Operator
$data = [];

if (isset($data["action"])) { // disini kita melakukan pengecheckan
    $action = $data["action"]; // semisal ada kita akan menyimpannya ke variable action
} else {
    $action = "Nothing";
}

echo $action . PHP_EOL;

// menggunakan null Coalescing Operator
// sama seperti dengan Ternary Operator, jika ternary operator berfungsi untuk pengecheckan dan pemberian value
// maka untuk Null Coalescing Operator, digunakan untuk melakukan pengecheckan variable beserta value-nya
// jika ada maka kita simpan datanya ke dalam variable
// untuk posisinya sebelum tanda tanya (dikiri) itu berisi value true
// untuk posisi setelah tanda tanya (dikanan) berisi value false
$action = $data["action"] ?? "Kosong";

echo $action . PHP_EOL;