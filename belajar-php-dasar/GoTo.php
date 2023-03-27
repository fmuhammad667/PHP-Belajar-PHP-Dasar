<?php

// biasanya kode program dibaca dari atas ke bawah, dari kiri ke kanan
// namun kita bisa merubah alur bacanya misalnya kode program tidak membaca dari atas ke bawah, dari kiri ke kanan
// namun meloncat dari bagian tertentu ke bagian yang lain, yaitu menggunakan fitur goto
// goto merupakan fitur dimana kita bisa membuat pembacaan program meloncat ke bagian tertentu
// untuk membuat goto kita perlu membuat label terlebih dahulu
// pembuatan label bisa dengan menuliskan kalimat disertai titik dua (:)
// selanjutnya untuk membuat kode program meloncat ke program tertentu kita bisa gunakan keyword goto disertai lokasi label
// jika kita mendeklarasikan goto namun tidak ada label maka akan tejadi error
goto a;

b: 
echo "SIeg H3il" . PHP_EOL;

goto c;

echo "Hello World!" . PHP_EOL;
// artinya disaat kode program membaca goto a ia akan mencari label a 
// dan melanjutkan kode langsung dibawah label a, dan meloncati baris yang lain

a:
echo "Hello A-word" . PHP_EOL;

goto b; 

c: 
echo "Konichiwa" . PHP_EOL;

goto d;
// bahkan goto juga bisa digunakan dalam perulangan
// jika semisal kita arahkan goto ke luar perulangan ketika sedang melakukan looping
// maka kode akan selesai

e:
$counter = 1;
while (true) {
    echo "Perulangan nilai ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        goto end;
    }
}

end:
echo "Selesai COY" . PHP_EOL;

goto f;

d: 
echo "Hello D" . PHP_EOL;

goto e;

f: 
echo "Selesai";