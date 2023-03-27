<?php

// recursive function adalah kemampuan function yang dapat memanggil dirinya sendiri
// kadang banyak problem, yang lebih mudah diselesaikan menggunakan recursive function
// contohnya seperti kasus faktorial

// faktorial menggunakan looping
function factorialLoop(int $angka): int {
    $total = 1;
    for($i = 1; $i <= $angka; $i++){
        $total *= $i;
    }
    return $total;
}

var_dump(factorialLoop(5));

// faktorial menggunakan recursive
function factorialRecursive(int $angka): int {
    if ($angka == 1){
        return 1;
    } else {
        return $angka * factorialRecursive($angka - 1);
    }
}

echo 1 * 2 * 3 * 4 * 5 * 6 * 7 . PHP_EOL;

var_dump(factorialRecursive(7));

// Problem dengan Recursive
// walaupun recursive ini sangat menarik, namun kita perlu berhati-hati
// jika recursive terlalu dalam, tidak akan menutup kemungkinan terjadi memory overflow
// yakni penggunaan memory melebihi kapasitas di php
// hal ini terjadi karena disaat kita memanggil function, maka function tersebut akan disimpan didalam stack
// jika function tersebut memanggil function lain, maka stack tersebut akan menumpuk
// dan jika terlalu banyak, akan mengkonsumsi memory yang sangat besar
// jika melebihi kapasitas maka akan error

// contoh error stackoverflow
function loop(int $value){
    if ($value == 0){
        echo "selesai" . PHP_EOL;
    } else {
        echo "loop yang ke-$value" . PHP_EOL;
        loop($value - 1);
    }
}

loop(3000000000);
