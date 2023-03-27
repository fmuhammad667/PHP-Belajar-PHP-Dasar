<?php

// callback adalah mekanisme dimana sebuah function memanggil function lain sesuai yang ada di-argument
// sebenarnya kita sudah melakukannya di materi variable function dan juga anonymous function
// namun di php terdapat cara lain untuk implementasi callback, yakni dengan tipe data callable
// untuk memanggil callback function, kita bisa menggunakan function call_user_func(callable, arguments);

function sayHello(string $nama, callable $function){
    $hasilAkhir = call_user_func($function, $nama);
    echo "Hallo $hasilAkhir" . PHP_EOL;
}

sayHello("fadhil", "strtoupper");
sayHello("KYOUYA", "strtolower");
sayHello("FADHIL", function($nama){return strtolower($nama);});
sayHello("kyouya", fn($nama)=>strtoupper($nama));