<?php

// seringkali disaat kita menulis program kita perlu menuliskan komentar
// komentar biasanya digunakan untuk mendokumentasikan program yang kita eksekusi
// komentar adalah kode program yang tidak akan dieksekusi (ignore) disaat kita menjalankan kode
// terdapat 2 cara untuk membuat komentar, pertama adalah multiple line kedua adalah single line

/*
ini merupakan komentar multiple line
artinya kita bisa menuliskan beberapa baris komentar tanpa batas
sebelum tanda bintang slash (/*) atau akhir dari komentar

ini adalah function untuk menampilkan
tulisan say hello
*/
function sayHello(){
    // ini adalah komentar satu baris
    echo "Hello" . PHP_EOL;
}

sayHello();

// jika semisal terdapat kode program yang sulit untuk dibaca logicnya susah untuk orang lain baca
// kita bisa menjelaskan alur kodenya melalui komentar ini