<?php

// manipulasi string

// Dot operator (.)
// digunakan untuk menggabungkan string dengan string ataupun tipe data lain
// sebenarnya kita bisa menggunakan operator (+) untuk menggabungkan string dengan string 
// namun karena terdapat type juggling di-php
// maka php akan menyangka kode tersebut sebagai operasi pertambahan
// lebih amannya kita bisa menggunakan dot operator 

// sebelumnya untuk print variable
$nama = "Fadhil Muhammad";

echo "Nama : ";
echo $nama;
echo "\n";

// kita bisa mempersingkat dengan dot operator
echo "Nama : " . $nama . PHP_EOL;

// tidak harus dengan string lagi kita bisa tambahkan tipe data lain
echo "umur : " . 20 . PHP_EOL;


// Konversi Tipe Data
// kita bisa melakukan konversi tipe data dari string ke number ataupun sebaliknya
// caranya di depan datanya kita hanya perlu menambahkan tanda kurung disertai nama tipe-datanya
$valueString = (string)160703;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"salah"; // 1.7
var_dump($valueFloat);

// bagaimana semisal jika kita ingin melakukan konversi string ke int, tapi data string berupa huruf ?
// maka php akan meng-konversikannya dengan angka 0


// Mengakses Karakter
// string diphp layaknya array, kita bisa mengakses tiap karakter di tiap katanya menggunakan urutan index
// jika kita mengakses lebih dari karakter yang ada maka akan menghasilkan error
$myName = "Kyouya";

echo $myName[0];
echo $myName[1];
echo $myName[2];
echo $myName[3];
echo $myName[4];
echo $myName[5] . PHP_EOL;
// echo $myName[6]; (Error)

// selain itu kita bisa merubah tiap data dari indexnya
$myName[4] = "s";
echo $myName . PHP_EOL; // kyousa

// Variable Parsing
// khusus penggunaan double quote dan juga heredoc kita bisa melakukan variable parsing
// artinya dengan double quote kita bisa gunakan tanda dolar ($) untuk mengakses value variable
// jika sebelumnya kita menggunakan dot operator untuk menggabungkan string
// kita juga bisa gunakan variable parsing jika kita ingin mengakses value variable

// jika sebelumnya
$name = "Fadhil";

// menggunakan dot operator
echo "Hello " . $name . ", Selamat Belajar PHP Dasar" . PHP_EOL;

// kita bisa menyingkatnya menggunakan variable parsing
echo "Hello $name, Selamat Belajar PHP Dasar" . PHP_EOL;


// Curly Brace
// kadang kita butuh menggabungkan value variable dengan string tanpa ada spasi
// hal ini tentu menyulitkan karena jika kita menggabungkannya seolah kita memanggil variable yang tidak ada
// namun diphp terdapat fitur Curly brace untuk menutupi problem tersebut

// jika tidak menggunakan curly brace
$buku = "book";

// echo "are you have $bukus" . PHP_EOL; // (error)

// maksud kita disini kita ingin menggabungkan value variable dengan kata tanpa ada spasi
// namun jika kita runing maka akan error karena variable bukus itu tidak ada diphp
// kita bisa menggunakan curly brace

echo "Are you have {$buku}s" . PHP_EOL;



