<?php

// STATIC SCOOPE
// secara default local variable siklus hidupnya hanya sebatas function tersebut dieksekusi
// jika sebuah function selesai dieksekusi maka siklus hidup local variablenya akan selesai
// php memiliki scope yang bernama static
// static scope hanya bisa kita set untuk local variable saja
// saat kita membuat sebuah local variable menjadi static, maka siklus hidupnya terus berlanjut
// meski sebuah function tersebut selesai dieksekusi
// artinya function tersebut jika kita eksekusi lagi, maka static variable tersebut memiliki value dari sebelumnya

function increment()
{
    static $counter = 1; // static scope

    echo "Counter := $counter" . PHP_EOL;

    $counter++;
}

increment();
increment();
increment();
increment();
// jika kita printout maka counter akan menampilkan angka satu
// ini karena siklus dari local scope hanya sekali disaat dieksekusi 
// maka jika kita eksekusi kembali maka akan merubah kembali dari awal

// kita bisa merubah variable local menjadi static scope
// disaat php membaca keyword static ia akan mengecheck apakah sebelumnya terdapat value, jika belum kita akan set
// dengan static scope kita merubah siklus local scope yang tadinya hanya sekali disaat eksekusi saja
// namun disaat kita panggil function lagi, variable tersebut akan value mengambil dari eksekusi sebelumnya
// jadi disaat kita panggil terus angkanya akan naik, karena dia akan digunakan untuk eksekusi function selanjutnya