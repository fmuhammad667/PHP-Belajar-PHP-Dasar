<?php

// sebelumnya disaat kita membuat php, itu tidak mengembalikan value ataupun nilai, kita hanya mengeksekusi saja
// namun kita bisa juga membuat sebuah function yang dapat mengembalikan sebuah value atau nilai
// untuk membuat sebuah function yang dapat mengembalikan value atau nilai di block function kita tulis return
// otomatis ia akan mengembalikan nilai, nilai yang dikembalikan hanya satu, tidak bisa lebih dari satu

function sum(int $a, int $b): int // type declaration return value
{
    return $a + $b;
}

sum(100,100);
// jika kita eksekusi, sebenarnya function tersebut berjalan
// namun datanya kita tidak tangkap, untuk menangkapnya kita bisa tangkap dengan variable ataupun printout langsung
$hasil = sum(100,100);
var_dump($hasil);

var_dump(sum(100,150));

// meski nilai kembalian function hanya satu, namun kita bisa membuat kondisi agar nilai kembaliannya dapat kita sesuaikan
function translateNilai(int $nilai): string // type declaration return value
{
    if ($nilai >= 80){
        return "A";
    } else if ($nilai >= 70){
        return "B";
    } else if ($nilai >= 60){
        return "C";
    } else if ($nilai >= 50){
        return "D";
    } else {
        return true; // type juggling (konversi dari boolean ke string, karena data kembalian harus string)
    } 
    
    // disaat kondisi terpenuhi dan membaca keyword return, artinya kode akan ke atas dan mengembalikan nilai
    // dan juga tidak akan mengeksekusi kode dibawahnya, contoh kita akan menuliskan echo dibawah
    echo "UjiCoba " . PHP_EOL; // ini tidak akan pernah ter-eksekusi
}

$score = translateNilai(70);
var_dump($score);

$score = translateNilai(30);
var_dump($score);



// RETURNED TYPE DECLARATIONS
// sama seperti argument value, pada function return value pun bisa kita beri tipe data
// hal ini selain untuk mempermudah pembacaan data kembalian dari sebuah function
// juga bisa menjaga agar data kembalian sesuai yang kita tulis di tipe data kembalian function
// karena jika yang kita tulis tidak sesuai dengan data kembalian, php akan membacanya error
// untuk menambahkan tipe data kembalian dari sebuah function setelah parameter kita tambahkan titik dua (:)
// lalu disertai tipe datanya yang akan kita hasilkan

