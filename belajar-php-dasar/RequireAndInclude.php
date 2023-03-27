<?php

// disaat kita membuat sebuah aplikasi menggunakan php, ada baiknya tidak dibuat dalam satu file
// lebih baik kita memecahnya menjadi beberapa file agar kode program tidak terlalu bertumpuk pada satu file
// php memiliki function yang bernama require dan juga include
// keduanya digunakan untuk mengambil file php lain, sesuai dengan url file
// lantas apa perbedaan antara require dan juga include
// require dia akan mengambil file php, jika semisal file yang dicari tidak ada 
// maka ia akan menghasilkan error dan program akan berhenti, termasuk error ini terjadi jika kita typo dalam penulisan
// include dia akan mengambil file php, jika semisal file yang dicari tidak ada
// maka ia akan memberi warning, namun program akan tetap berjalan

// untuk melakukan include/require dari file ekstensi url file akan berlaku
include_once "lib/MyFunction.php";
include_once "lib/MyFunction.php";

echo sayHello("Fadhil", "Muhammad");
// setelah kita melakukan include/require, otomatis kita bisa mengakses function yang terdapat di file yang telah kita panggil

// dapat kita lihat perbedaan dari require dan juga include semisal kita rubah url-nya
// untuk require disaat file tidak ditemukan maka akan error dengan keterangan file tidak ada
// selain itu program pun akan berhenti
// disaat kita menggunakan include dan file tidak ditemukan, hasilnya sama akan error
// namun keterangannya hanya memberi warning saja, dan program untuk kebawahnya masih tetap berjalan

echo sayHello("Fadhil", "Muhammad");



// POSISI DARI REQUIRE DAN INCLUDE
// biasanya posisi dari include/require ditempatkan di bagian atas, ini tak lain karena program php dibaca dari atas ke bawah
// jangan sampai kita memanggil function dari file lain dengan include/require tapi include/require kita panggil setelahnya
// hal ini akan menyebabkan error



// REQUIRE_ONCE dan juga INCLUDE_ONCE
// selain dari require terdapat juga require_once, untuk include pun sama terdapat include_once untuk include
// function require dan juga include akan mengambil file yang kita inginkan
// namun jika kita berkali-kali include file yang sama baik menggunakan require ataupun include
// maka dia akan melakukan load sebanyak berapa kali kita include/require
// hal ini akan menjadi problem jika file yang telah kita include ternyata telah kita pakai didalamnya
// seolah setelah kita load include pertama, selanjutnya kita include lagi maka akan menyebabkan data menjadi bentrok
// ini akan menyebabkan error dengan kode error redeclare, atau bagian tertentu telah terdefinisi (replace)
// tak lain karena kita telah melakukan include sebelumnya lalu kita include ulang
// maka untuk kasus ini kita bisa menggunakan require_once dan juga include_once
// keduanya sama berfungsi untuk mengambil file yang kita inginkan
// namun keduanya bisa mendeteksi semisal kita pernah include file yang sama maka ia tidak akan diambil
// dan jika kita tidak pernah melakukan include pada file maka ia akan diambil
// sehingga meski terdapat pengulangan kode semisal 2 kali pun ia tidak akan error