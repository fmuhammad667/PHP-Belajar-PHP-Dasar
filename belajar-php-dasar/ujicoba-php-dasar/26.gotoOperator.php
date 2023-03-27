<?php

// salah satu fitur yang jarang digunakan di php adalah goto operator
// alasan kenapa jarang digunakan adalah karena jika terlalu banyak menggunakan goto operator 
// maka akan mudah membingungkan orang yang membaca kodenya
// goto operator adalah fitur dimana kita bisa loncat kode program ke baris lain
// agar bisa loncat ke baris lain, kita harus membuat yang namanya label
// caranya dengan menulis nama label lalu disertai tanda colon (:)


// buat sampai F

goto a;
echo "1" . PHP_EOL;
echo "2" . PHP_EOL;

d:
echo "Aku sayang kamu" . PHP_EOL;

goto e;

b:
echo "Hello World" . PHP_EOL;

goto c;

f:
echo "Fadhil Muhammad" . PHP_EOL;

goto selesai;

a:
echo "3" . PHP_EOL;
echo "4" . PHP_EOL;
echo "5" . PHP_EOL;

goto b;

c: 
echo "Hello Cuy" . PHP_EOL;

goto d;

e:
echo "Empati itu sangat penting" . PHP_EOL;

goto f;

selesai:
echo "Tamat" . PHP_EOL;

// goto operator dalam loop
$angka = 10;
do {
    echo "Tampilkan angka " . $angka . PHP_EOL;
    $angka--;

    if($angka < 5){
        goto x;
    }
} while ($angka >= 1);

x:
echo "Selesai" . PHP_EOL;