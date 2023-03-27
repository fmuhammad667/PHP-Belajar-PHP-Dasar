<?php

// sebelumnya kita sudah mengenal kata kunci break didalam switch statement yaitu untuk menghentikan case dalam switch
// sama dengan perulangan, switch digunakan untuk menghentikan semua perulangan
// berbeda dengan continue, continue digunakan untuk melakukan skip
// atau memberhentikan perulangan saat ini, dan melanjutkan ke perulangan setelahnya

$angka = 1;
while (true) {
    echo "ini adalah perulangan ke-$angka" . PHP_EOL; //t1t2t3t4t5t6t7t8t9t10
    $angka++; //234567891011

    if ($angka > 10 ) { //234567891011 (true)
        break;
    }
}

var_dump(10 > 10);
var_dump(11 > 10);

echo "1". PHP_EOL;
// break; (Error) break hanya digunakan di switch ataupun loop
echo "1". PHP_EOL;
// continue; (Error) continue hanya digunakan di switch ataupun loop
echo "1". PHP_EOL;

// continue
// biasanya digunakan untuk menampilkan angka ganjil atau genap
$angka = 0;
while ($angka <= 100){
    $angka++;
    if($angka % 2 == 0){
        continue;
    }
    echo "Hello angka $angka" . PHP_EOL;
}

for ($i = 0; $i <= 100; $i++){
    if ($i % 2 == 0){
        continue;
    }
    echo "Angka ke-$i" . PHP_EOL;
}