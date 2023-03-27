<?php
// variable adalah tempat untuk menyimpan data
// sebelumnya kita hanya menampilkan data secara langsung
// tapi sebenarnya kita bisa tampung data tersebut kedalam variable

$name = "Fadhil";
$age = 20;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

// variable variables
$testing = "hello";
$$testing = "world!"; 
// seolah kita mendeklarasikan sebuah variable baru
// $hello = "world!"; // hello ini diambil dari value variable $testing

echo "Contoh : ";
echo $testing;
echo "\n";

echo "hello : ";
// echo $$testing; 
// kita bisa juga menggunakan value dari variable 
echo $hello;
echo "\n";
