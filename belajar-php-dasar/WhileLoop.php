<?php

// selain menggunakan "for" terdapat juga keyword "while" untuk melakukan perulangan
// while loop merupakan perulangan versi sederhana dari for
// pada while loop hanya ada kondisinya saja, untuk init dan post statement kita buat secara manual dan terpisah 
// jika kondisi bernilai true maka perulangan akan berjalan

// sebelumnya pada for 
// for($counter = 1; $counter <= 10; $counter++){
//     echo "For loop ke-$counter" . PHP_EOL;
// }

// jika menggunakan while
$counter = 1;
while ($counter <= 10) {
    echo "While loop ke-$counter" . PHP_EOL;
    $counter++;
}

// sama seperti di if, switch, dan for
// untuk while terdapat sintax alternative, kita bisa mengganti kurung kurawal menjadi titik dua
// dan diakhir kita gunakan keyword endwhile;
$counter = 10;
while ($counter >= 1) :
    echo "While loop Syntax Alternative ke-$counter" . PHP_EOL;
    $counter--;
endwhile;