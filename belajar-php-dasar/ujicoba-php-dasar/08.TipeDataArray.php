<?php

$nama = "Fadhil";

$arrayAngka = array(1,2,3,4,5,6,7,8,9,10);
var_dump($arrayAngka);

$arrayNama = ["Fadhil", "Muhammad", "Kyouya", true, 16, 0.7, $nama];
var_dump($arrayNama);

// Operasi Array
echo $arrayNama[4];
echo "\n";

$arrayNama[2] = "Ibnu";
var_dump($arrayNama);

unset($arrayNama[1]);
var_dump($arrayNama);

$arrayNama[1] = "Kyouya";
var_dump($arrayNama);

$arrayNama[] = "Mitsurugi";
var_dump($arrayNama);

var_dump(count($arrayAngka));
var_dump(count($arrayNama));

// Tipe data map

$fadhil = array(
    "0" => "Fadhil",
    "1" => true,
    "2" => "bebas"
);

var_dump($fadhil);

$kyouya = [
    "id" => "001",
    "nama" => "Mitsurugi Kyouya",
    "umur" => "28",
    "alamat" => [
        "negeri" => "saba",
        "benua" => "afrika"
    ]
];

var_dump($kyouya);
echo $kyouya["alamat"]["benua"];
echo "\n";

$arrayAngka1 = array(1,2,3,4,5,6,7,8,9,10,[1,2,3,4,5]);
var_dump($arrayAngka1);
var_dump($arrayAngka1[10][2]);
