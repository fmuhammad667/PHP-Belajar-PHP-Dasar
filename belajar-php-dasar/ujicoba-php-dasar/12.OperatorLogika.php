<?php

/* 
Operator Logika
and (&&)
or (||)
not (!)
xor (xor)
*/

$a = true;
$b = false;

// And
var_dump($a && $a); // true
var_dump($a && $b); // false

// Or
var_dump($a || $b); // true
var_dump($b || $b); // false

// Not
var_dump(!$b); // true
var_dump(!$a); // false

// Xor
var_dump($a xor $b); // true
var_dump($a xor $a); // false
var_dump($b xor $b); // false