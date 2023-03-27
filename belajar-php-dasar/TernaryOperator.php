<?php

// kadang terdapat kasus dimana kita butuh melukan pengecheckan menggunakan if statement
// jika kondisi bernilai true, kita ingin memberikan value A terhadap variable
// jika kondisi bernilai false, kita ingin memberikan value B terhadap variable
// penggunaan pengechekan seperti ini bisa kita persingkat menggunakan Ternary Operator

// pengecheckan tanpa menggunakan ternary operator
$gender = "awewe";
$hi = Null;

if ($gender == "Lalaki") {
    $hi = "Hello Bro";
} else {
    $hi = "Hello Ladies";
}

echo $hi . PHP_EOL;

// kita bisa menyingkatnya menggunakan ternary operator
// untuk posisi setelah tanda tanya dan sebelum titik dua adah value true
// sedangkan setelah tanda titik dua adalah value dari false
$hi = $gender == "Lalaki" ? "Hello AA" : "Hello TETEH";
echo $hi . PHP_EOL;

