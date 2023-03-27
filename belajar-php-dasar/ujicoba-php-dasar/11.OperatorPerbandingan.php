<?php

/* 
Operator Perbandingan
- Sama dengan (==)
- Identik (===)
- tidak sama dengan (!=)
- tidak sama dengan (<>)
- tidak Identik (!==)
- kurang dari (<)
- kurang dari atau sama dengan (<=)
- lebih dari (>)
- lebih dari atau sama dengan (>=)
*/

$a = 20;
$b = 30;

var_dump(10 == "10"); // true
var_dump(10 === "10"); // false
var_dump("11" != 11); // false
var_dump("11" <> 11); // false
var_dump("11" !== 11); // true
var_dump($a < $b); // true
var_dump($a <= $b); // true
var_dump($b > $a); // true
var_dump($b >= $a); // true