<?php

// kadang ada kalanya dimana kita ingin mengakses dan menampilkan isi array
// kita bisa menggunakan perulangan untuk mengakses tiap data array
// meskipun menggunakan perulangan ini sangat bertele-tele
// kita perlu membuat counter, lalu tiap data kita akses menggunakan counter yang kita buat
// namun untungnya di php terdapat fitur foreach
// fitur foreach ini digunakan untuk mengakses data array secara otomatis
// tanpa perlu kita buat perulangan secara manual

// jika tidak menggunakan foreach (perulangan biasa)
$names = ["Fadhil", "Muhammad", "Kyouya"];

for ($i = 0; $i < count($names); $i++) {
    echo "$i : $names[$i]" . PHP_EOL;
}

// menggunakan foreach
foreach($names as $ngaran) {
    echo $ngaran . PHP_EOL;
} // yang membedakan adalah jika kita akses maka ia tidak mempunyai index


// kita tahu bahwa array di php tidak hanya berupa index saja
// kadang kala ada yang berbentuk key-value, yang mana merupakan data map
// maka untuk mengatasinya kita bisa gunakan foreach yang tadi 
// namun setelah kata kunci as kita perlu tambahkan variable untuk menampung value key-nya
// setelahnya kita tambahkan tanda panah dan variable untuk menampung value dari array

$person = [
    "first_name" => "Fadhil",
    "middle_name" => "Muhammad",
    "last_name" => "Kyouya"
];

foreach($person as $i => $v) {
    echo $i . " : " . $v . PHP_EOL;
}

// sebenarnya jika kita ingin mengakses index pada saat menggunakan foreach 
// kita bisa gunakan cara yang sama
foreach($names as $index => $ngaran) {
    echo $index . " : " . $ngaran . PHP_EOL;
} 