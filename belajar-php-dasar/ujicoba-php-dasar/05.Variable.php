<?php

$nama = "Mitsurugi Kyouya";
$umur = "28";

echo "Nama : ";
echo $nama;
echo "\n";

echo "Umur : ";
echo $umur;
echo "\n";

// variable variables
$nama = "fadhil";
// $fadhil = "ganteng";
$$nama = "ganteng";

echo "Nama : ";
echo $nama;
echo "\n";

echo "Muka : ";
echo $fadhil;
echo $$nama;
echo "\n";