<?php

$nilai = 60;

switch ($nilai){
    case $nilai >= "90":
        echo "Nilai anda A" . PHP_EOL;
        break;
    case $nilai >= "80":
        echo "Nilai anda B" . PHP_EOL;
        break;
    case $nilai >= "70":
        echo "Nilai anda C" . PHP_EOL;
        break;
    case $nilai >= "60":
        echo "Nilai anda D" . PHP_EOL;
        break;
    default :
        echo "Nilai anda perlu diremedial" . PHP_EOL;
}

$kehadiran = "a"; // besar kecil suatu string tetap akan berpengaruh
switch ($kehadiran) :
    case "A" :
        echo "Kehadiran anda sempurna" . PHP_EOL;
        break;
    case "B" :
        echo "Kehadiran anda baik" . PHP_EOL;
        break;
    case "C" :
        echo "Kehadiran anda cukup" . PHP_EOL;
        break;
    case "D" :
        echo "Kehadiran anda perlu dipertanyakan" . PHP_EOL;
        break;
    default :
        echo "Anda jarang hadir diperkuliahan lebih dari 12 pertemuan" . PHP_EOL;
endswitch;