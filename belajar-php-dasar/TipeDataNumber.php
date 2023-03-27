<?php

// bilangan desimal
echo "Desimal : ";
var_dump(1234);

// bilangan oktal
echo "Oktal : ";
var_dump(01234);

// bilangan hexadecimal
echo "Hexadesimal : ";
var_dump(0x10);

// bilangan binary
echo "binary : ";
var_dump(0b10000);

// underscore di number
echo "Underscore di number : ";
var_dump(12_345_678_910); // underscore ini saat dijalankan maka akan di-ignore

// floating point
echo "nilai Float : ";
var_dump(1.234);

// floating point dengan E notation 
echo "Floating point dengan E notation : ";
var_dump(1.7e3); // ini seolah nilainya merupakan hasil dari (1.7 x 1000)

// floating point jika tidak menggunakan E notation 
echo "Floating point contoh dari diatasnya : ";
var_dump(1.7 * 1000); 

// floating point dengan E notation minus 
echo "Floating point dengan E notation minus : ";
var_dump(1.8e-3);  // ini seolah nilainya merupakan hasil dari (1.8 X 0.001)

// floating point jika tidak menggunakan E notation minus
echo "Floating point contoh dari diatasnya : ";
var_dump(1.8 * 0.001); 

// ujicoba menggunakan E notation
echo "Ujicoba menggunakan E notation : e5 ";
var_dump(1e5); // ini seolah nilainya merupakan hasil dari (1 X 100000)

// underscore di floating point
echo "Underscore di floating point : ";
var_dump(1_234.1234);

// integer overflow
// int memiliki batasan sesuai dengan sistem operasi bit dikomputer kita
// untuk 32 adalah 2147483647
// untuk 64 adalah 9223372036854775807
// jika lebih dari itu maka akan diubah menjadi tipe data float

echo "Integer overflow (32) : ";
var_dump(2147483648); // dilebihkan satu

echo "Integer overflow (64) : ";
var_dump(9223372036854775808); // dilebihkan satu




