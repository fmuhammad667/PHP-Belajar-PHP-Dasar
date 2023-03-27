<?php

// di-bahasa pemrograman lain terdapat juga keyword "continue"
// continue digunakan untuk menghentikan perulangan saat ini dan melanjutkan ke perulangan berikutnya
// jadi disaat kode program menemukan kata kunci continue ia akan melanjutkan ke iterasi berikutnya
// dan tidak mengeksekusi kode dibawahnya
// biasanya continue digunakan untuk menampilkan program bilangan ganjil ataupun genap

for($counter = 1; $counter <= 100; $counter++){
    if ($counter % 2 == 0) {
        continue; 
        // artinya disaat nilai counter di-modulo 2 hasilnya 0, maka akan melanjutkan ke perulangan selanjutnya
        // artinya kode bawah tidak akan dieksekusi dan juga tidak akan ditampilkan
    }
    echo "Perulangan: $counter" . PHP_EOL;
}