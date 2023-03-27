<?php

// LOCAL SCOOPE
// local scope adalah scope yang mencakup lokal
// disaat kita membuat sebuah variable didalam function maka ia mempunyai scope lokal
// local scope hanya bisa kita akses didalam local scope itu sendiri
// dan tidak bisa kita akses diglobal scope ataupun function lain

function deklarasiVariable(){
    $nama = "Fadhil";
}

deklarasiVariable();
echo $nama . PHP_EOL;
// jika kita printout maka terjadi error dengan keterangan undefined variable $nama
// hal ini terjadi karena variable nama yang kita deklarasikan didalam local scope
// tidak bisa kita akses di global function, karena untuk local scope hanya bisa kita akses di localnya itu sendiri
