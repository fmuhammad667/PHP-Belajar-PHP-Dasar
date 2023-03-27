<?php

$nama = "Fadhil";
$isNull = is_null($nama);
var_dump(is_null($isNull));
$umur = null;
echo $nama;
var_dump(is_null($umur));
echo $umur;
echo "\n";

$nama = null;
var_dump(is_null($nama));
echo $umur;
echo $nama;

// function Unset dan Isset
$value = "Kyouya";

unset($value);

var_dump(isset($value));

$value = null;

var_dump(isset($value));