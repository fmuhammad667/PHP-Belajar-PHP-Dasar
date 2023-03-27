<?php

function sayHello($namaAwal, $namaAkhir = ""){
    echo "Hello $namaAwal $namaAkhir" . PHP_EOL;
}

sayHello("Fadhil", "Muhammad");
sayHello("Kyouya");

// type declaration
function total(int $a, int $b){
    $total = $a + $b;
    echo "total antara $a + $b adalah $total" . PHP_EOL;
}

// total(1,"salah"); must be of type int, string given
total(1,2);
total("100", "200");
total(false, true);
// total([1,2,3],[1,2,3]);

// Variable Argument List

$arr = [1,2,3,4,5,6,7,8,9,10];

function penjumlahan(...$angka){
    $total = 0;
    foreach ($angka as $angk){
        $total += $angk;
    }
    echo "Total " . implode(" + ", $angka) . " = $total" . PHP_EOL;
}

penjumlahan(1,2,3,4,5,6,7,8,9,10);
penjumlahan(...$arr);
penjumlahan(...[1,2,3,4,5,6,7,8,9,10]);

function penjumlahanArray(array $angka){
    $total = 0;
    foreach($angka as $angk){
        $total += $angk;
    }
    echo "Total " . implode(" + ", $angka) . " = $total" . PHP_EOL;
}

penjumlahanArray([1,2,3,4,5,6,7,8,9,10]);
penjumlahanArray($arr);