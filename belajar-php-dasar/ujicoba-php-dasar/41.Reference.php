<?php

// Assign By Reference
// php memungkinkan kita membuat beberapa variable menuju value yang sama

$nama = "Fadhil";

$person = &$nama;
$person = "Kyouya";

$orang = &$person;
$masyarakat = &$orang;

$masyarakat = "Kita";

echo $nama . PHP_EOL;

// Pass By Reference
// mengirim data ke function dengan reference

function increment(int &$value){ // perbedaannya terletak pada penggunaan reference diparameter
    $value++;
}

$counter = 1;
increment($counter);
increment($counter);
increment($counter);

echo $counter . PHP_EOL;

// Returning References
// php bisa mengembalikan references pada function
// namun kita perlu berhati-hati dalam penggunaannya, karena fitur ini bisa sangat membingungkan
function &getValue(): int {
    static $value = 100;
    return $value;
}

$a = &getValue();
echo $a . PHP_EOL;

$a = 200;
echo $a . PHP_EOL;

$b = &getValue();
echo $b . PHP_EOL;