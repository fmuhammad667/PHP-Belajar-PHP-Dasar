<?php

// sebelumnya kita pernah menggunakan function bawaan dari php untuk memanipulasi string
// seperti misalnya strtoupper(), strtolower(), implode() dan sebagainya
// terdapat banyak sekali function bawaaan dari php
// untuk detailnya kita bisa lihat didokumentasi website resmi php
// https://www.php.net/manual/en/ref.strings.php

var_dump(join(",", [1,2,3,4,5,6,7,8,9,10])); 
// join dimana kita merubah array menjadi string
// parameter pertama adalah separator untuk menggabungkan joinnya dan kedua adalah arraynya
// outputnya adalah string dan dipisah menggunakan koma "1,2,3,4,5,6,7,8,9,10"

var_dump(explode(" ", "Fadhil Muhammad Kyouya"));
// explode adalah kita memecah string menjadi array, dipisah sesuai delimiter yang kita cantumkan
// parameter pertama adalah delimiternya, parameter kedua adalah kalimatnya
// outputnya adalah string tersebut akan dipecah menjadi array, sesuai dengan delimiternya

var_dump(strtoupper("fadhil muhammad kyouya"));
// strtoupper adalah function yang akan melakukan upper pada setiap teks yang kita tulis
// parameternya terdapat satu yaitu teks yang ditulis
// outputnya setiap teks yang kita tulis di-argument maka akan menjadi kapital untuk penulisannya

var_dump(strtolower("FADHIL MUHAMMAD KYOUYA"));
// strtolower adalah function yang akan melakukan lower case pada setiap teks yang kita input
// parameternya hanya terdapat satu berupa string yang kita tulis
// outputnya setiap teks yang kita tulis di-argument maka akan menjadi huruf kecil semua

var_dump(trim("     Fadhil     Muhammad     Kyouya             "));
// trim adalah function yang akan menghapus white space didepan teks atau belakang teks
// namun tidak berlaku semisal whitespace tersebut terdapat ditengah
// parameternya hanya terdapat satu berupa string yang kita tulis
// outputnya setiap teks yang terdapat white space baik depan atau belakang akan dihapus

var_dump(substr("Fadhil Muhammad Kyouya", 16, 22));
// substr adalah function yang digunakan untuk mengambil data dari index ke berapa sampai index ke berapa
// parameternya terdapat 3 yaitu teks, dimulai index ke berapa data diambil dan sampai ke index berapa
// outputnya akan menampilkan data yang diambil tadi

// ini merupakan beberapa saja
// di-php terdapat puluhan function untuk memanipulasi string
// kita bisa melihatnya secara lengkap di dokumentasinya