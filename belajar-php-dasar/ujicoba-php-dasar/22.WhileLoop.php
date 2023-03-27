<?php

$counter = 1;

while($counter <= 10){
    echo "Hello While loop angka ke-" . $counter . PHP_EOL;
    $counter++;
}

$angka = 1;
while($angka <= 15){
    echo "Saya berangkat ke sekolah selama " . $angka . PHP_EOL;
    $angka++;
}

$test = 7;
while ($test >= 4){
    echo "Saya mengikuti test selama " . $test . PHP_EOL;
    $test--;
}

$ujian = 1;
while ($ujian <= 3){
    echo "Saya mengikuti ujian selama $ujian hari" . PHP_EOL;
    $ujian++;
}

// akan diberi default nomor dari 1, meski awalnya hanya error
while ($nomor <= 10) {
    echo "Hallo " . $nomor . PHP_EOL;
    $nomor++;
}

// Syntax Alternative
$pp = 1;
while ($pp > 0){
    echo "Saya pergi ke bandung selama " . $pp . PHP_EOL;
    $pp--;
}

$isibensin = 15;
while ($isibensin <= 20):
    echo "Saya melakukan isi bensin sebanyak " . $isibensin . PHP_EOL;
    $isibensin++;
endwhile;

// jika perulangan error maka tidak akan tampil block perulangan