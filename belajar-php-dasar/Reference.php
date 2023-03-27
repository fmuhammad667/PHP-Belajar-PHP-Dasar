<?php

// reference adalah mengakses variable yang sama dengan nama variable yang berbeda
// reference di php berbeda dengan reference yang terdapat dibahasa pemrograman seperti C/C++ yang memiliki fitur pointer
// analogi dari reference semisal jika variable adalah file, lalu value adalah isi file
// maka reference adalah membuat shortcut (windows) atau alias (mac/linux) terhadap file yang sama
// maka disaat kita mengubah isi value dari reference baik menggunakan variable1 ataupun variable reference itu sendiri
// value variable aslinya akan berubah
// untuk membuat reference terhadap variable kita bisa gunakan karakter &



// ASIGN BY REFERENCE
// reference menggunakan variable

$name = "Fadil";
$otherName = &$name; // untuk membuat reference kita bisa gunakan tanda &

// defaultnya disaat kita tidak melakukan reference
// variable dari otherName akan melakukan copy value dari variable name
// sehingga value dari othername akan sama dengan name
// namun jika kita rubah value dari othername tidak akan merubah value dari variable name

// sedangkan jika kita menggunakan reference ke variable name
// maka selain dari otherName mempunyai value yang sama dengan variable name
// jika sekiranya kita merubah value dari variable baik di otherName ataupun variable name
// maka valuenya akan berganti, baik yang ada diotherName dan juga variable name

$otherName = "Kyouya";

echo $name . PHP_EOL;



// PASS BY REFERENCE
// selain menggunakan variable untuk melakukan reference
// kita juga bisa mengirim data ke function menggunakan reference
// kita mengirim data ke parameter dengan reference ke variable aslinya

function increment(int &$value){ // penggunaan reference didalam parameter
    $value++;

    // defaultnya disaat kita mengirim data ke function ia akan mengirim valuenya
    // tidak disertai variable, jadi valuenya akan naik cuman terhitung divariable tetap satu
    // jadi passing datanya hanya sebatas value, dan tidak tersimpan divariable

    // bagaimana caranya agar data yang dikirim mengarah ke variable yang kita gunakan
    // kita bisa gunakan reference untuk kasus ini
    // karena selain dari kita mengirim value, dengan menggunakan reference ia pun akan mengarah ke variable
}

$counter = 1;
increment($counter);
increment($counter);
increment($counter);

echo $counter . PHP_EOL;



// RETURNING REFERENCES
// sebagaimana kita ketahui bahwa function pun dapat mengembalikan nilai
// php juga bisa mengembalikan nilai reference pada function
// namun hati-hati dalam penggunaan fitur ini, karena dapat membingungkan
// karena jika referencenya kita rubah maka function return nya pun dapat berubah

function &getValue(): int { // ia mengembalikan nilai referece, artinya disaat kita tangkap maka value variable dapat kita rubah
    static $value = 100; 
    // disini kita menggunakan static karena jika kita menggunakan local scope siklusnya hanya sebatas pemanggilan saja
    // jadi kita rubah menjadi static agar function tersebut siklusnya masih hidup meski functionnya sudah kita panggil
    return $value;
}

$a = &getValue(); // untuk menangkap data kembalian menggunakan reference kita gunakan karakter & disertai nama function
$a = 200;

$b = &getValue();
// orang akan bingung karena nilai yang keluar dari function getValue bukan 100
// namun jadi 200, setelah kita check ternyata ada orang yang merubah valuenya

echo $a . PHP_EOL;
echo $b . PHP_EOL;