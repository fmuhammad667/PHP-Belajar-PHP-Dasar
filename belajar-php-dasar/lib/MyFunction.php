<?php

// contoh kita membuat sebuah function untuk mencoba function include dan juga require
function sayHello(string $firstName, string $lastName = ""): string {
    return "Hello $firstName $lastName" . PHP_EOL;
}