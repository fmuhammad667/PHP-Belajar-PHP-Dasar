<?php

// selain dari string function dan juga array function yang berfungsi untuk memanipulasi data keduanya
// di php terdapat juga function yang diawali dengan prefix is, atau kita sebut is function
// biasanya function dengan awalan "is" ini digunakan untuk mengecheck tipe datanya
// kita bisa melihatnya di situs resmi php
// https://www.php.net/manual/en/ref.var.php

$data = "Fadhil";

// pengecheckan tipe datanya menggunakan is_function
var_dump(is_string($data));
var_dump(is_int($data));
var_dump(is_float($data));
var_dump(is_array($data));
var_dump(is_bool($data));
var_dump(is_callable($data));