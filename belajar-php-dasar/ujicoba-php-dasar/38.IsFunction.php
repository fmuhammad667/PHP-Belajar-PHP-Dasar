<?php

// php memiliki banyak sekali function dengan prefix is_
// biasanya function dengan prefix is digunakan untuk melakukan pengecheckan tipe data dari sebuah data
// https://www.php.net/manual/en/ref.var.php

/* 
is_string()
is_bool()
is_int()
is_float()
is_array()
is_callable()
*/

$func = fn(int $angka) => $angka * 10;
$helloWorld = function () {
    echo "Hello World";
};

$data = $helloWorld;
var_dump(is_string($data));
var_dump(is_bool($data));
var_dump(is_int($data));
var_dump(is_float($data));
var_dump(is_array($data));
var_dump(is_callable($data));