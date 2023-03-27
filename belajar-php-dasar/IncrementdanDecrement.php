<?php

// php mendukung gaya pemrograman C, seperti diantaranya adalah increment dan decrement
// keduanya berfungsi untuk menaikan ataupun menurunkan angka sebanyak 1 angka
// increment untk menaikan dan decrement menurunkan
// terdapat 2 statement diantaranya adalah post statement dan pre statement

$a = 10;
$a++; // 11
++$a; // 12
var_dump($a);

// selain itu kita bisa melakukan increment dan decrement terhadap variable

// post increment
$b = 10;
$c = $b++; 
// ini seolah, kita asign $b ke $c, lalu menaikan value dari $b
// $c = $b;
// $b = $b + 1;

var_dump($b);
var_dump($c);

// pre increment
$d = 10;
$e = ++$d;
// ini seolah, kita menaikan value dari $d, lalu asign $d ke $e
// $d = $d + 1;
// $e = $d;

var_dump($d);
var_dump($e);

// post decrement
$f = 10;
$g = $f--;
// ini seolah, kita asign $f ke $g, lalu menurunkan $f 
// $g = $f;
// $f = $f - 1;

var_dump($f);
var_dump($g);

// pre decrement
$h = 10;
$i = --$h;
// ini seolah kita menurunkan $h, lalu asign $h ke $i
// $h = $h - 1;
// $i = $h;

var_dump($h);
var_dump($i);