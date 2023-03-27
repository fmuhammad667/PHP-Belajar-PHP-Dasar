<?php

// di php kita bisa membuat variable dimana saja
// mau itu diglobal, didalam function, dalam if, ataupun perulangan
// variable scope sendiri adalah tempat dimana kita bisa mengakses variable
// jadi meski variable bisa kita buat dimana saja, namun terdapat scope untuk mengakses variable
// default dari php ia mempunyai 3 scope yaitu public, static, dan juga local

// GLOBAL SCOPE
// variable-variable yang kita buat diluar function memiliki scope Global
// artinya variable yang mempunyai scope global tidak bisa kita akses didalam function 
// dan hanya bisa kita akses diluar function saja

$nama = "Fadhil"; // global scope

function sayHello(){
    global $nama; // keyword global
    // dengan menggunakan keyword global maka kita bisa mengakses variable lobal scope
    echo $nama . PHP_EOL; // (error)

    // karena variable $GLOBALS bersifat superglobal, maka kita bisa mengaksesnya didalam function (local scope)
    echo $GLOBALS["nama"] . PHP_EOL;
}

sayHello();
// jika kita printout maka akan menghasilkan error, yakni variable $nama tidak terdefinisi
// tak lain karena variable $nama berbeda scope, ia berada di global scope
// kita tidak bisa mengaksesnya dari dalam function 



// GLOBAL keyword
// sebenarnya kita bisa mengakses variable yang berada di global scope ke local scope
// dengan cara menggunakan keywrod global
// keyword global ini akan mengubah variable yang terdapat diglobal menjadi bisa kita akses ke local



// $GLOBALS VARIABLE
// selain menggunakan keyword global, setiap variable yang kita buat diglobal scope
// secara otomatis akan disimpan didalam array bernama $GLOBALS oleh php
// jadi kita bisa mengakses variable $GLOBALS dengan key-nya adalah nama variable-nya jika semisal kita ingin mengubah 
// ataupun mengakses variable yang cakupannya berada di global scope
// $GLOBALS sendiri bersifat superglobal, artinya bisa kita akses dari scope manapun termasuk local scope

// jadi disaat kita membuat sebuah variable di global scope
// otomatis php akan membuatnya data array baru di $GLOBALS menyesuaikan nama dari variable yang dibuat di local scope
// $GLOBALS["namaVariable"] = "value"; // secara otomatis tanpa perlu kita buat
// dan ini default bawaan dari php