<?php

// post increment
$a = 7;
$b = $a++;

var_dump($a); // 8
var_dump($b); // 7

// pre increment
$c = 9;
$d = ++$c;

var_dump($c); // 10 
var_dump($d); // 10

// post decrement
$e = 20; 
$f = $e--;

var_dump($e); // 19
var_dump($f); // 20

// pre decrement
$g = 5;
$h = --$g;

var_dump($g); // 4
var_dump($h); // 4