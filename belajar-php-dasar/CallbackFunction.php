<?php

// callback adalah kemampuan dimana sebuah function dapat memanggil function lain sesuai dengan yang ada didalam argument
// sebenarnya kita sudah mengimplementasikannya dengan menggunakan anonymous function dan juga variable function
// keduanya bisa kita jadikan argument untuk parameter semisal kita ingin memanggil function lain
// namun terdapat mekanisme lain, semisal kita ingin argument yang nanti kita isi harus berupa function
// kita bisa rubah argumentnya dengan menambahkan type declarations callable
// jika kita merubah argument menjadi callable 
// maka ia dapat menerima variable function, anonymous function, string biasa dan juga arrow function
// untuk memanggil callback function kita bisa gunakan function call_user_func(callable, argument)

function sayHello (string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name); // pemanggilan dengan tipe data callback
    // ini sama saja dengan $filter($name) // cuman dengan cara lain
    // $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

// meski tipe datanya callable namun kita dapat mengimputkan melalui string
sayHello("Fadhil", "strtoupper");
sayHello("KYOUYA", "strtolower");

// kita juga bisa mengirim menggunakan anonymous function
sayHello("guderian", function ($ngaran):string {
    return strtoupper($ngaran);
});

// ataupun menggunakan arrow function
sayHello("HEINZ", fn($namanya) => strtolower($namanya));

// kedepannya semisal kita membuat sebuah function dan pada argument terdapat perlu mengimputkan sebauh function
// kita bisa gunakan tipe data callable, untuk memanggil function tersebut kita bisa gunakan function call_user_func()
// ataupun kita bisa gunakan seperti sebelumnya $filter($argument) dan ini sama saja hasilnya