<?php

// php mendukung konsep yang bernama variable function
// variable function adalah kemampuan dimana sebuah variable dapat memanggil sebuah function
// caranya yaitu dengan menjadikan value variable kita isi dengan nama function melalui tipe data string
// maka disaat pemanggilannya kita hanya menulis nama variable disertai tanda kurung
// jika semisal ada parameter, kita tambahkan parameter di-tanda kurung tersebut

function foo(){
    echo "Foo" . PHP_EOL;
}

function bar(){
    echo "Bar" . PHP_EOL;
}

// biasanya disaat pemanggilan function kita panggil menggunakan nama functionnya
foo();
bar();

// namun kita bisa gunakan variable untuk memanggil function
$functionFoo = "foo";
$functionFoo(); // ini sama saja seperti foo();

$functionBar = "bar"; // value samakan dengan nama function
$functionBar();

// kegunaanya kita bisa buat sebuah argument di sebuah function dengan memasukan nama function yang lain

// semisal kita membuat sebuah function dengan argument pertama adalah nama dan argument kedua adalah function lain
// yang mana nantinya argument kedua akan memanipulasi argument pertama, karena argument kedua tak lain adalah function
// nantinya function tersebut disimpan didalam sebuah variable dan kembalian dari function kita tampilkan
function hi(string $name, $filter){
    $hasil = $filter($name);
    echo "Hi $hasil" . PHP_EOL;
}

// semisal kita coba membuat sebuah function
function testing(string $ngaran): string {
    return "Everyone $ngaran";
}

hi("Fadhil", "testing");

// kita juga dapat menggunakan function bawaan dari php, misalnya strtoupper dan strtolower
hi("Kyouya", "strtoupper");
hi("KYOUYA", "strtolower");





