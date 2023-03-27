<?php

// tipe data null merepersentasikan variable tanpa nilai
// semisal kita ingin menghapus data dari sebuah variable
// kita bisa isi menggunakan value null
// penulisan dari null ialah case insensitive

$nama = "Fadhil Muhammad";
$nama = null;

$age = null;
// kita juga men-set sebuah variable langsung tanpa nilai
// $age = null;

// jika semisal kita print-out maka hasilnya adalah string kosong
echo "Nama : ";
echo $nama;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

// kita bisa melakukan pengecheckan apakah sebuah variable itu bernilai null atau tidak ?
// menggunakan function is_null($variable)
echo "Apakah Nama adalah null ? ";
// echo is_null($nama); 
// jika kita menampilkan menggunakan echo maka akan menampilkan reperensi hasil menggunakan nomor
// kita bisa menggunakan var_dump($variable) untuk menampilkan hasil lebih detail lagi
var_dump(is_null($nama));
echo "\n";

// perlu kita bedakan pemanggilan function is_null ini hanya untuk mengecheck tipe data saja
// bukan berarti dengan fitur is_null ini kita bisa mengakses variable yang belum kita definisikan atau buat
// jika semisal kita berbuat demikian maka akan error, alias variable belum terdefinisi

// selain dari melakukan set data menjadi null
// diphp terdapat fitur untuk menghapus sebuah variable 
// yakni menggunakan fitur unset($variable)
$testing = "Ujicoba motor saya";
unset($testing);

// echo $testing;
// hasilnya adalah error
// karena function unset($variable) itu sendiri berfungsi untuk menghapus sebuah variable

// perbedaannya sendiri untuk null adalah ia akan menjadikan tipe data bernilai null dan variable masih bisa digunakan
// namun untuk function unset($variable) berfungsi untuk menghapus sebuah variable
// kita perlu berhati-hati ketika menghapus sebuah variable menggunakan unset($variable) ini
// selain dari kita tidak bisa mengakses variable-nya, jika kita check menggunakan function is_null pun tidak akan bisa
// agar lebih aman kita bisa gunakan isset($variable)
// isset($variable) berfungsi untuk melakukan pengecheckan apakah sebuah variable ada atau tidak
// dan juga melakukan pengecheckan apakah variable tersebut bernilai null atau tidak

// melakukan ujicoba untuk fitur isset($variable)
$testing = "Mitsurugi Kyouya";
var_dump(isset($testing)); 
// hasilnya adalah true, karena variable sudah didefiniskan dan juga nilainya tidak bernilai true

$testing = null;
// kemungkinan hasilnya adalah false, karena meski variable sudah didefiniskan namun nilainya bernilai null
var_dump(isset($testing));

// untuk mengecheck apakah sebuah variable ada dan nilainya tidak null disarankan menggunakan isset($variable)
// meski terdapat fitur is_null namun lebih aman menggunakan isset($variable)
// untuk menghapus variable kita bisa asingn dengan variable null ataupun hapus menggunakan unset($variable)
// jika kita ingin melakukan pengecheckan sebuah variable yang ada kita bisa gunakan is_null($variable)
// untuk mengecheck sebuah variable yang tidak ada kita bisa gunakan function isset($variable)