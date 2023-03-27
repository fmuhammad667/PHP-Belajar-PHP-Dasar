<?php

// IF Statement
// seperti pada bahasa pemrograman kebanyakan php juga mempunyai fitur percabangan
// percabangan diphp menggunakan keyword "IF"
// percabangan sendiri adalah kita bisa mengeksekusi kode tertentu jika kondisi terpenuhi
// jika kondisi false maka kode tersebut tidak akan dieksekusi

$nilai = 0;
$absen = 90;

if ($nilai >= 75 && $absen >= 75 ){
    echo "Selamat Anda Lulus " . PHP_EOL;
} else {
    echo "Maaf, Perbaiki kesalahan anda yah ..." . PHP_EOL;
}

// ELSE Statement
// blok if akan dieksekusi jika kondisi bernilai true
// jika false maka blok if tidak akan dieksekusi alias percabangan telah selesai
// kadang kita ingin mengeksekusi kode semisal kondisinya bernilai false
// diphp kita bisa tambahkan else statement jika semisal kita ingin mengeksekusi kode dengan kondisi false


// ELSE IF Statement
// kadang dalam pembuatan percabangan, tidak cukup jika kita menggunakan satu kondisi saja
// kita perlu membuat beberapa kondisi sekaligus
// di-php kita bisa menggunakan else if statement 
// else if statement diletakan ditengah-tengah setelah blok if dan sebelum blok else 
// kondisi dengan else if statement bisa lebih dari satu kali, artinya bisa beberapa

if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai Anda A" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70) {
    echo "Nilai Anda B" . PHP_EOL;
} else if ($nilai >= 60 && $absen >= 60) {
    echo "Nilai Anda C" . PHP_EOL;
} else if ($nilai >= 50 && $absen >= 50) {
    echo "Nilai Anda D" . PHP_EOL;
} else {
    echo "Nilai Anda E" . PHP_EOL;
}


// Syntax Alternative
// selain menggunakan kurung kurawal, untuk percabangan kita bisa gunakan titik dua (:)
// namun jika menggunakan titik dua, penulisan untuk else if perlu digabung menjadi "elseif"
// diakhirnya pun kita perlu menambahkan keyword endif;
if ($nilai >= 80 && $absen >= 80) :
    echo "Nilai Anda A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70) :
    echo "Nilai Anda B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60) :
    echo "Nilai Anda C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50) :
    echo "Nilai Anda D" . PHP_EOL;
else :
    echo "Nilai Anda E" . PHP_EOL;
endif;
