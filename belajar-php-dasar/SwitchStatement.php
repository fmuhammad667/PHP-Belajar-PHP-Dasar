<?php

// jika semisal kita membuat sebuah percabangan namun pada kondisi kita hanya melakukan perbandingan menggunakan (==)
// kita bisa menggunakan Switch Statement
// switch statement sendiri adalah percabangan yang lebih simpel cara pembuatannya
// dan dikhususkan untuk perbandingan (==)

// sebelumnya jika kita membuat menggunakan if statement
$nilai = "B";

if ($nilai == "A") {
    echo "Anda lulus dengan sangat baik" . PHP_EOL;
} else if ($nilai == "B" || $nilai == "C"){
    echo "Anda lulus" . PHP_EOL;
} else if ($nilai == "D") {
    echo "Anda tidak lulus" . PHP_EOL;
} else {
    echo "Mohon maaf, Nilai anda sangat memprihatinkan" . PHP_EOL;
}

// kita bisa menyingkatnya menggunakan switch statement
switch($nilai) {
    case "A" : // case bisa direpersentasi sebagai pengecheckan
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break; // break bisa direpersentasikan sebagai kurung tutup
    case "B" :
    case "C" : 
        echo "Anda lulus" . PHP_EOL;
        break; // jika kita tidak menggunakan break maka pengecheckan akan terus berlanjut sampai ke bawah
    case "D" : 
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default : // default bisa direpersentasikan sebagai else jika dalam percabangan if
    echo "Mohon maaf, Nilai anda sangat memprihatinkan" . PHP_EOL;
}

// meski terlihat panjang, namun ini lebih efisien karena kita tidak perlu menuliskan kondisi secara manual


// SYNTAX Alternative
// sama seperti di if statement, pada switch statement terdapat syntax alternative 
// jika pada if statement syntax alternative-nya adalah endif, untuk switch statement adalah endif
switch($nilai):
    case "A" : 
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break; 
    case "B" :
    case "C" : 
        echo "Anda lulus" . PHP_EOL;
        break; 
    case "D" : 
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default : 
    echo "Mohon maaf, Nilai anda sangat memprihatinkan" . PHP_EOL;
endswitch;
