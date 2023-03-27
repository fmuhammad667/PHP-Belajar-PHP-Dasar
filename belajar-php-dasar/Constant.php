<?php

define("AUTHOR", "Fadhil Muhammad");
define("APP_VERSION", 100);
// define("APP_VERSION", 100); // jika kita mendeklarasikan constant yang sama maka akan terjadi error

// kita juga tidak bisa merubah value dari constant karena constant sifatnya immutable
// AUTHOR = "Fadhil Kyouya";

echo "Author : ";
echo AUTHOR;
echo "\n";

echo "App version : ";
echo APP_VERSION;
echo "\n";
