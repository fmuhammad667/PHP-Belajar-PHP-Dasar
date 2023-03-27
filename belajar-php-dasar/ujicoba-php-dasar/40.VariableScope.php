<?php

// di-php, variable bisa dibuat dimana saja
// maksud dari variable scope adalah dibagian mana saja variable tersebut dapat diakses
// php memiliki tiga jenis variable scope
// 1. Global Scope
// 2. Local Scope
// 3. Static Scope

// Global Scope
$nama = "Fadil"; // global scope

function sayName(){
    // global $nama;
    echo $GLOBALS["nama"] . PHP_EOL; // Error : Undefined variable $nama
}

sayName();

// Local Scope
function createName(){
    // global $nama; (testing)
    $nama = "Kyouya"; // local scope
}

createName();
echo $nama . PHP_EOL; // yang tampil adalah Fadhil (Global Scope)

// Global Keyword
function sayHello(){
    global $nama; // global keyword
    echo "Hallo $nama" . PHP_EOL;
}

sayHello();