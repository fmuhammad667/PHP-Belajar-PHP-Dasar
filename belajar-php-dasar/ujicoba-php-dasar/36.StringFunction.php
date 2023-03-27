<?php

// sebelumnya kita pernah menggunakan beberapa function bawaan php untuk memanipulasi string
// sebenarnya banyak sekali function bawaan dari php untuk memanipulasi string itu sendiri
// https://www.php.net/manual/en/ref.strings.php


/* 
Contoh string Function
implode() / join(), mengubah array menjadi string
explode(), untuk memecah string menjadi array
strtolower(), menurunkan menjadi lower case
strtoupper(), menaikan menjadi upper case
substr(), untuk mengambil sebagian string, ditambah parameter lain yakni dari-sampai
trim(), menghapus whitespace di depan dan belakang, tidak dengan ditengah
*/

var_dump(implode(" , ", ["Fadhil", "Muhammad", "Kyouya", "Guderian", "Kuribayashi"]));
var_dump(["Fadhil", "Muhammad", "Kyouya", "Guderian", "Kuribayashi"]);
var_dump(explode(" ", "Fadhil Muhammad Kyouya"));
var_dump(strtolower("FADHIL MUHAMMAD"));
var_dump(strtoupper("fadhil muhammad"));
var_dump(substr("Fadhil Muhammad", 9, 20)); // lebih dari string tidak error
var_dump(trim("            Fadhil                Muhammad        "));
