<?php

// selain for dan while terdapat perulangan lain yakni do-while
// penulisannya hampir sama dengan perulangan while
// namun terdapat perbedaan dari konsepnya, pada perulangan while kondisi ditempatkan diawal
// sehingga jika diawal kondisi bernilai false maka blok perulangan tidak akan dieksekusi
// berbeda dengan do while, pada do while blok perulangan akan dieksekusi terlebih dahulu
// setelah melakukan perulangan maka selanjutnya masuk ke kondisi
// artinya meski kondisi bernilai false maka blok perulangan akan dieksekusi minimal satu kali

// sebelumnya pada while
// $counter = 10;
// while($counter >= 1) {
//     echo "Perulangan While loop ke-$counter";
//     $counter--;
// }


// jika menggunakan do while loop
$counter = 1;
do {
    echo "Perulangan While loop ke-$counter" . PHP_EOL;
    $counter++;
} while($counter <= 10);
