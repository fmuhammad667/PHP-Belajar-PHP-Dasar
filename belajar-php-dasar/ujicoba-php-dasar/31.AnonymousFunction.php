<?php

// penggunaan dalam cakupan value variable
$sayHello = function (string $nama){
    echo "Hello $nama" . PHP_EOL;
}; // karena ini satu statement maka harus ditutup menggunakan semicolon

$sayHello("Fadhil");
$sayHello("Kyouya");

// penggunaan dalam cakupan argument
function sayHello(string $nama, $function){
    $hasilAkhir = $function($nama);
    echo "Hallo $hasilAkhir" . PHP_EOL;
}

sayHello("Kyouya", function (string $nama){
    return strtoupper($nama);
});

sayHello("FADHIL", function (string $nama){
    return strtolower($nama);
});

// mengakses variable yang terdapat diluar closure

// menggunakan function biasa
$namaAwal = "Fadhil";
$namaAkhir = "Muhammad";

function hai() {
    echo "hai $namaAwal $namaAkhir" . PHP_EOL;
}

hai(); // function biasa tidak bisa menerima variable dari luar

$sayHi = function () use ($namaAwal, $namaAkhir) {
    echo "Hai $namaAwal $namaAkhir" . PHP_EOL;
};

$sayHi();