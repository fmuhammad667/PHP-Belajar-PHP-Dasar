<?php

// Expression
// Expression adalah bagian yang terpenting diphp
// hampir semua kode yang kita tulis adalah expression
// simpelnya expression adalah apapun yang memiliki nilai atau value

// contoh expression sederhana
$a = 5;
$b = $a;

// contoh expression kompleks
function getValue(){
    return 100;
}

// Statement
// Statement adalah kalimat lengkap dalam bahasa indonesia
// biasanya berisikan execute komplit, dan diakhiri dengan titik koma
$nama = "Fadhil Muhammad Kyouya";
echo $nama;
$tanggal = new DateTime();

// Block
// Block merupakan kumpulan dari nol statement atau lebih
// Block diawali dan diakhiri dengan kurung kurawal ({})
function halloDunia($nama){
    echo "Program Mulai";
    echo "Hallo Dunia";
    echo "Hallo $nama";
    echo "Program Selesai";
}