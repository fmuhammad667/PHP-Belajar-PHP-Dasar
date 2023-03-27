<?php

// data null direpersetasikan dengan data kosong
// kita bisa mengosongkan data di variable menggunakan data null
// untuk membuat data null, kita perlu mengetikan keyword null

$nama = "Fadhil";
$nama = null;

// atau kita bisa set sebuah variable dengan kondisi null diawal
$umur = null;

// jika semisal kita printout maka akan menghasilkan string kosong saja
echo "Nama : ";
echo $nama;
echo "\n";

echo "Umur : ";
echo $umur;
echo "\n";

// kadang kita perlu mengecheck sebuah data
// apakah data tersebut null atau tidak
// kita bisa mengechecknya menggunakannya function is_null($variable)
// return dari is_null adalah boolean

echo "Apakah variable nama null ? ";
// echo is_null($nama); 
// jika kita menggunakan echo maka akan menampilkan repersentasi boolean namun menggunakan angka
// kita bisa gunakan var_dump() untuk memperjelas value
var_dump(is_null($nama));
echo "\n";

// perlu diketahui is_null ini digunakan untuk mengecheck apakah tipe data bernilai null atau bukan
// is_null sendiri tidak berfungsi semisal kita mengecheck tipe data yang tidak ada
// is_null($variableTIdakAda); // error
// kita perlu membedakan data null dengan variable yang tidak ada

// selain menjadikan tipe data menjadi null
// diphp kita juga bisa menghapus sebuah variable menggunakan function unset($variable)
$contoh = "Testing";
unset($contoh);

echo $contoh; // error (variable tidak ditemukan)
// hal ini terjadi karena unset($variable) memang berfungsi untuk menghapus variable
// otomatis variable yang kita unset tidak dapat digunakan kembali
// hal ini yang membedakan jika data null, maka datanya akan menjadi null namun variable masih tetap ada
// untuk unset($variable) ia akan menghapus variable-nya
// bahkan semisal kita menggunakan function is_null untuk mengecheck variable yang telah terhapus pun
// akan menjadikan otput tersebut error

// selain menggunakan is_null kita juga bisa menggunakan isset
// isset digunakan untuk mengecheck apakah sebuah variable ada atau tidak 
// DAN mempunyai tipe data null atau tidak
// isset akan bernilai true semisal jika variable tersebut ada dan nilainya tidak null

$contoh = null;
$contoh = "Fadhil";

var_dump(isset($contoh));
// untuk mengecheck apakah variable ada dan nilainya tidak null sebaiknya kita gunakan isset
// meski ada is_null namun lebih aman menggunakan isset
// untuk menghapus data meski kita bisa gunakan null kita juga bisa menggunakan unset()
// untuk mengecheck semisal variablenya ada kita bisa gunakan is_null
// untuk mengecheck dan kita tidak yakin variablenya tidak ada kita bisa gunakan isset()


