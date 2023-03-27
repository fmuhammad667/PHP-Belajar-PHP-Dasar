<?php

// kita sudah mengenal kata kunci break di switch statement
// pada switch statement, break digunakan untuk menghentikan case agar tidak mengeksekusi case dibawah nya
// simpelnya sebagai penutup kurung kurawal dalam if-else
// pada perulangan break ini bisa kita gunakan 
// jika kita melakukan perulangan dan menemui kata kunci break maka semua perulangan akan berhenti
// tidak peduli semisal terdapat beberapa ratusan perulangan setelahnya

$counter = 1;

while(true) { // jika kondisi bernilai true, maka perulangan tidak akan pernah berhenti
    echo "Perulangan ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}