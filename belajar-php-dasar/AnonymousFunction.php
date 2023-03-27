<?php

// Anonymous function sesuai dengan namanya adalah function tanpa nama
// di php Anonymous function juga disebut dengan closure
// meskipun jika di bahasa pemrograman lain closure dan juga anonymous function adalah hal yang terpisah
// biasanya anonymous function digunakan untuk menambahkan argument ataupun value variable
// dengan anonymous function pun kita bisa kirimkan sebagai parameter

$sayHi = function (string $name) {
    echo "Hello $name" . PHP_EOL;
}; // kita perlu menambahkan semicolon 
// karena ini merupakan satu statement, berbeda dengan function biasa yang tidak perlu menambahakn semicolon

// ini seolah menjadikan variable tersebut menjadi variable function seperti yang sebelumnya kita pelajari
// untuk memanggilnya caranya kita bisa tuliskan nama variablenya
$sayHi("Fadhil");
$sayHi("Kyouya");

// selain sebagai value variable
// anonymous function juga bisa kita gunakan sebagai parameter untuk function

function sayHello(string $nama, $filter){
    $hasil = $filter($nama);
    echo "Hello $hasil" . PHP_EOL;
}

// penggunaan anonymous function untuk argument
sayHello("Kyouya", function (string $ngaran): string {
    return strtolower($ngaran);
});

// atau kita juga bisa kirim argument melalui value variable
$functionFilter = function (string $nama): string
{
    return strtoupper($nama);
};

sayHello("Kyouya", $functionFilter);

// ini lebih efisien jika semisal kita butuh untuk melakukan hal yang sederhana 
// dibanding kita membuat sebuah function terlebih dahulu



// Mengakses VARIABLE diluar Closure/Anonymous Function
// defaultnya disaat kita membuat sebuah function, kita bisa mengakses variable global
// artinya kita bisa mengakses variable yang ada diluar function
// namun untuk function anonymous atau closure ia tidak bisa mengakses variable yang ada diglobal
// agar anonymous function bisa mengakses variable secara global kita perlu menggunakan keyword use
// disertai tanda kurung, dan didalam tanda kurung kita sebutkan nama variablenya secara eksplisit

$namaAwal = "Muhammad";
$namaAkhir = "Kyouya";

$sayHelloKyouya = function () use ($namaAwal, $namaAkhir){ 
    // penggunaan keyword use, untuk mengakses variable global diluar closure/anonymous function
    echo "Hello $namaAwal $namaAkhir" . PHP_EOL;
}; 

$sayHelloKyouya();

// jika kita rubah value variablenya, semisal
$namaAwal = "Fadhil";
$namaAkhir = "Guderian";

$sayHelloKyouya();
// jika kita prinout, hasilnya tetap sama seperti sebelumnya "Hello Muhammad Kyouya"
// hal ini karena disaat kita menggunakan keyword "use" 
// maka variable yang kita gunakan akan dicopy datanya ke closure/anonymous function
// dan tidak melakukan reference, artinya jika variable global yang kita gunakan di keyword use kita rubah value-nya
// untuk variable yang dipakai diclosure akan tetap sama, tidak akan berubah sama sekali