<?php

function helloWorld(){
    echo "Hello World by Function" . PHP_EOL;
}

// untuk menampilkan function kita perlu memanggilnya
helloWorld();
helloWorld();
helloWorld();
helloWorld();
helloWorld();

// lokasi function
$buat = true;
if($buat){
    function selamatPagi(){
        echo "Selamat Pagi Semuanya" . PHP_EOL;
    }
} else {
    $buat = "Tidak ada";
}

function coba(){
    function uwu(){
        echo "Hello World!" . PHP_EOL;
    }
    uwu();
}

var_dump($buat);
selamatPagi();
coba();