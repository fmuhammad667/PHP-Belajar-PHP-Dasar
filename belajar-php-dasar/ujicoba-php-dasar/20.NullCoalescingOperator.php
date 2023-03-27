<?php

// data kosong direpersentasikan dengan null
// hal yang merepotkan di php adalah mengecheck apakah data ada atau tidak dan bernilai null atau tidak
// hal tersebut bisa kita lakukan pengecheckan menggunakan if statement dan juga function isset
// namun di php terdapat fitur null coalescing operator

$halo = "null";

var_dump(isset($halo));
// isset akan bernilai true, jika variable ada dan kondisinya tidak bernilai null

// tanpa menggunakan null coalescing operator
$orang = [];

if(isset($orang["jalan"])){
    $alamat = $orang["jalan"];
} else {
    $alamat = "alamat belum di-set";
}

echo $alamat . PHP_EOL;

// dengan menggunakan null coalescing operator
$data = [];

$nomor = $data["id"] ?? "nomor belum di-set";
echo $nomor . PHP_EOL;

$personal = [
    "nama" => "Mitsurugi Kyouya",
    "alamat" => "isekai",
    "kelamin" => "Laki-laki"
];

$kelamin = $personal["kelamin"] ?? "data kelamin belum ada";
echo $kelamin . PHP_EOL;

if (isset($personal["nama"])){
    $nama = $personal["nama"];
} else {
    $nama = "nama tidak ada";
}

echo $nama . PHP_EOL;

$manusia = false;
$orang = $manusia ?? "tidak ada";
echo $orang . PHP_EOL;