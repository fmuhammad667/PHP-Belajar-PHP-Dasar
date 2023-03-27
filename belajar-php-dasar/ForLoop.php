<?php

// dibahasa pemrograman lain untuk membuat sebuah perulangan biasanya menggunakan kata kunci "for"
// termasuk untuk membuat perulangan di php, kita bisa gunakan keyword "for"
// perulangan akan selalu diulang selama kondisi bernilai true
// jika kondisi bernilai false maka perulangan selesai, ataupun tidak berjalan
// konsepnya hampir sama dengan else-if
// pada else-if jika kondisi bernilai true maka akan dieksekusi satu kali
// namun untuk for, eksekusi tergantung dari expression kondisi
// jika kita buat 100, maka akan mengulangi sebanyak 100 kali

// STRUKTUR PERULANGAN FOR
/*
for(init statement; kondisi; post statement){
    // blok perulangan
}
*/

// FLOW PERULANGAN FOR
// pertama akan masuk ke init statement, init statement akan dieksekusi sekali ketika diawal
// dari init statement, masuk ke kondisi
// jika kondisi bernilai true, maka blok kode perulangan akan dijalankan 
// begitu juga sebaliknya, jika kondisi bernilai false, maka blok tidak akan dijalankan
// setelah melakukan perulangan maka masuk ke post statement untuk melakukan increment value
// init statement -> kondisi -> (true) -> blok perulangan -> post statement -> kondisi (...) sampai kondisi bernilai false
//                              (false) -> perulangan berhenti / tidak melakukan perulangan sama sekali
// init statement, kondisi, dan juga post statement tidak wajib diisi
// jika kita tidak mengisi kondisi maka defaultnya adalah true

for($counter = 1; $counter <= 10; $counter++ ){
    echo "ini adalah For Loop ke-$counter" . PHP_EOL;
}

// selain menggunakan penaikan angka kita juga bisa gunakan penurunan angka
for($counter = 10; $counter >= 1; $counter--){
    echo "ini adalah For Loop ke-$counter" . PHP_EOL;
}

// sama seperti if dan switch, pada for pun terdapat syntax alternative
// kita bisa mengganti kurung kurawal dengan titik dua dan diakhir kita tambahkan keyword endfor;

for($counter = 1; $counter <= 10; $counter++ ):
    echo "ini adalah For Loop ke-$counter" . PHP_EOL;
endfor;

for($counter = 10; $counter >= 1; $counter--) :
    echo "ini adalah For Loop ke-$counter" . PHP_EOL;
endfor;
