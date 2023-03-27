<?php

$firstName = "Fadhil";
$lastName = "Kyouya";

$sayHello = fn() => "Hello $firstName $lastName" . PHP_EOL;

// default arrow function adalah return value
echo $sayHello();