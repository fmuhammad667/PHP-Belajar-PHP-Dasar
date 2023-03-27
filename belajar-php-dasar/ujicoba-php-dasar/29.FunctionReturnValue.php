<?php

// secara default, function tidak menghasilkan value apapun, namun jika kita ingin
// kita bisa membuat function yang dapat menghasilkan value atau mengembalikan data
// untuk membuat hal tersebut didalam block function kita harus menggunakan kata kunci return
// lalu disertai dengan data apa yang ingin dikembalikan
// kembalian data dari function hanya bisa satu data tidak bisa lebih

function sum(int $first, int $last): int {
    return $first + $last;
}

var_dump(sum(10,10));
$hasil = sum(10,10);
var_dump($hasil);

// kita juga bisa membuat beberapa kondisi untuk return value
// $hasil = 86; // (Tidak berlaku)
function hasilUjian(int $hasil): string {
    if($hasil >= 90){
        return "A";
    } else if ($hasil >= 80){
        return "B";
    } else if ($hasil >= 70){
        return "C";
    } else if ($hasil >= 60){
        return "D";
    } else {
        return "Anda perlu masuk ke kelas tambahan";
    }
}

$fadhil = hasilUjian(80);
var_dump($fadhil);

$budi = hasilUjian(66);
var_dump($budi);

var_dump(hasilUjian(40));