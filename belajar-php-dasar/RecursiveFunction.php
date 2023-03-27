<?php

// Recursive function adalah kemampuan dimana sebuah function dapat memanggil dirinya sendiri
// kadang terdapat beberapa kasus yang memang bisa diselesaikan menggunakan function recursive ini
// seperti misalnya kasus factorial, factorial adalah dimana kita melakukan perkalian sesuai dengan angka yang dimaksud
// semisal angka 5, maka kita kalikan dari angka pertama (1) namun dengan urutan terbalik 5 * 4 * 3 * 2 * 1

// factorial dengan menggunakan looping
function factorialLoop(int $value): int {
    $total = 1;
    for($i = 1; $i <= $value; $i++){
        $total *= $i;
    }
    return $total;
}

var_dump(factorialLoop(5)); // 120
// untuk melihat benar atau salahnya kita bisa lihat dengan operasi sederhana
var_dump(1 * 2 * 3 * 4 * 5); // 120

// meski kita bisa melakukan factorial menggunakan looping
// namun kita juga melakukan factorial dengan recursive, atau memanggil function dirinya sendiri
function factorialRecursive(int $value): int {
    if ($value == 1){
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialRecursive(5));
// jika kita printout maka hasilnya akan sama dengan nilai sebelumnya
// cuman disini kita tidak perlu membuat perulangan secara manual



// PROBLEM DISAAT MENGGUNAKAN RECURSIVE FUNCTION
// meski recursive function merupakan fitur yang sangat menarik
// namun terdapat beberapa problem didalamnya php sendiri memiliki batas default untuk pengguaan memori
// pada prakteknya disaat kita memanggil function dengan menggunakan recursive, function tersebut akan disimpan didalam stack
// jika kita memanggil function terlalu dalam maka akan membuat stack menumpuk
// dan jika melebihi default dari memori php maka akan mengakibatkan error

// gambaran dari recursive function kurang lebih seperti ini
// factorialRecursive(5) * factorialRecursive(4) * factorialRecursive(3) * factorialRecursive(2) * factorialRecursive(1);
// sehingga bisa kita bayangkan jika kita memanggilnya terlalu banyak

// contoh recursive namun menggunakan loop
function loop(int $number){
    if ($number == 0){
        echo "Selesai COY" . PHP_EOL;
    } else {
        echo "Loop ke-$number" . PHP_EOL;
        loop($number - 1);
    }
}

// jika kita melakukan printout dengan value yang lebih rendah maka tidak akan terjadi error
var_dump(loop(100));

// namun jika kita looping dengan angka yang lebih besar
var_dump(loop(100_000_000));

// error dengan alowed size, artinya dari looping yang kita buat sudah menghasilkan berapa ratus byte

// jika semisal kita perlu melakukan sesuatu yang dalam
// kita bisa mengganti dengan perulangan for, while, ataupun do-while

