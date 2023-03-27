<?php

// function adalah blok kode program yang akan berjalan saat kita panggil
// sebelumnya kita sudah menggunakan function seperti var_dup, isset, count dan lain sebagainya
// untuk membuat sebuah function kita bisa ketik keyword function disertai nama functionnya
// penaman function tidak boleh menggunakan spasi, lalu diikuti tanda kurung dan juga kurung kurawal
// didalam kurung kurawal adalah blok kode program yang nanti akan dieksekusi
// ketika kita membuat sebuah function, function tersebut tidak akan berjalan
// untuk memanggilnya kita bisa tulis nama functionnya disertai tanda kurung
// dibahasa pemrograman lain function disebut juga dengan method

function sayHello()
{
    echo "Hello Function" . PHP_EOL;
    // kita bisa memasukan statement lebih dari satu baris 
}

// setelah kita membuat sebuah function, kita perlu memanggilnya untuk mengeksekusinya
sayHello();
sayHello();
sayHello();
sayHello();
sayHello();

// untuk penempatan lokasi function sendiri di php sangat flexibel
// tidak seperti bahasa pemrograman lain disaat membuat sebuah function perlu ada aturan dan lokasi khusus layaknya java
// diphp saking flexibelnya kita bisa membuat function bahkan didalam if statement
// namun perlu diingat jika semisal kita memanggil sebuah function yang belum didefinisikan atau belum ada maka akan error

$buat = false;

if ($buat) {
    function hiMom() {
        echo "Hello Mom" . PHP_EOL;
    }
}

hiMom();
hiMom();

// jika variable buat bernilai true maka otomatis ia akan mengeksekusi atau men-set function hiMom
// hal ini akan membuat function hiMom tersebut dapat kita akses 
// jika variable buat bernilai false maka otomatis ia tidak akan mengeksekusi atau men-set function hiMom
// hal ini disaat kita memanggil function hiMom akan menyebabkan error, karena function tersebut tidak pernah terdefinisikan