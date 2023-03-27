<?php

/* 
Operator Array
Union (+)
Equality (==)
Identitiy (===)
Inequality (!=)
Inequality (<>)
NonIdentity (!===)
*/

$first = [
    "first_name" => "Fadhil"
];

$last = [
    "last_name" => "Kyouya"
];

$fullName = $first + $last;
var_dump($fullName);
var_dump($first + $last);

$a = [
    "firstName" => "Fadhil",
    "lastName" => "Muhammad",
];

$b = [
    "firstName" => "Fadhil",
    "lastName" => "Muhammad",
];

var_dump($a == $b);
var_dump($a === $b);
var_dump($a != $b);
var_dump($a <> $b);
var_dump($a !== $b);