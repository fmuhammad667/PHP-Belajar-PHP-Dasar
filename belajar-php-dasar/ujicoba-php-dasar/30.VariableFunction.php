<?php

function goodMorning(): string {
    return "Good Morning Everyone" . PHP_EOL;
}

function sayHello() {
    echo "Hello Everyone" . PHP_EOL;
}

$hello = "sayHello";
$hello(); // hello everyone
echo $hello . PHP_EOL; // sayHello

$pagi = "goodMorning";
echo $pagi(); // Good Morning Everyone
echo $pagi . PHP_EOL; // valuenya tetap goodMorning

$test = $pagi;
echo $test . PHP_EOL; // goodMorning
echo $test(); // Good Morning Everyone

$testing = $pagi();
echo $testing; // Good Morning Everyone


// penggunaan variable function dalam function
// simpelnya kita bisa memasukan function didalam function menggunakan value variable
function hello(string $nama, $function){
    $hasilAkhir = $function($nama);
    echo "Hallo $hasilAkhir" . PHP_EOL;
}

hello("FADHIL", "strtolower");
hello("Fadhil", "strtoupper");
hello("Kyouya", "testing");
hello("Kyouya", "salam");
hello("Jakarta", "test");

function testing(string $nama): string {
    return "uwu $nama";
}

function salam(string $nama): string {
    return "Assalamu'alaikum warahmatullahi wabarakatuhu $nama";
}

function test(string $nama) {
    echo "Hallo Bandung Ibukota periangan, $nama";
}