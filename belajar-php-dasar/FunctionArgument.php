<?php

// kita bisa mengirim data ke function yang telah kita buat, ini dinamakan dengan parameter ataupun argument
// cara untuk mengirim data ke function yang kita panggil adalah kita perlu membuat sebuah argument di function tersebut
// caranya adalah kita tulis nama argument di tanda kurung pada function, cara pembuatannya sama seperti pembuatan variable
// nantinya argument tersebut bisa kita akses di block function dan juga setiap pemanggilan function wajib untuk mengirim data

function sayHello($name = "People") // argument/parameter
{
    echo "Hello $name" . PHP_EOL;
}

// disaat pemanggilan function wajib kita isi parameternya
sayHello("Fadhil");
sayHello("Kyouya"); // datanya akan berubah sesuai dengan data yang kita kirim

// DEFAULT ARGUMENT VALUE
// php mendukung fitur default argument value
// hal ini memungkinkan kita jika tidak mengirim data pada saat pemanggilan function
// dia akan mengambil nilai default dari argument yang telah kita set di function
sayHello();



// KESALAHAN DEFAULT ARGUMENT VALUE
// setiap argument yang kita buat di-function dapat kita beri default value, termasuk di argument awal
// namun jika kita menambahkan default value di argument awal saja, maka itu tidak berguna
// karena disaat kita mengirim data, ia tetap akan masuk ke argument pertama, sedangkan argument keduanya akan tetap kosong
// dan ini akan menyebabkan kode error
// oleh karena  default value biasanya dikhususkan untuk argument di akhir atau setelah argument awal
// dan argument diawal itu wajib dikirim data, maksudnya tidak perlu kita beri default value

function ujicoba($namaAwal, $namaAkhir = "") {
    echo "Hello $namaAwal $namaAkhir" . PHP_EOL;
}

ujicoba("Mitsurugi", "Kyouya");
ujicoba("Fadil", "Muhammad", "Kyouya"); // jika lebih dari argument maka akan ditolah
ujicoba("Fadhil");



// TYPE DECLARATION
// pada saat kita membuat sebuah argument di function, otomatis argument tersebut bersifat dinamis
// artinya kita bisa inputkan tipe apapun
// kadang itu akan sangat menyulitkan semisal kita membuat sebuah function namun harus menginputkan tipe data tertentu
// namun diphp terdapat type declaration, artinya setiap inputan dari sebuah function bisa kita atur harus tipe data tertentu
// jika selain dari itu, php akan melakukan type juggling/konversi apakah tipe data tersebut bisa dikonversi atau tidak
// jika bisa maka akan dieksekusi, dan jika tidak maka akan error karena tipe data tidak sesuai
// untuk menambahkan type declaration, diawal sebelum nama argument kita tuliskan tipe datanya

function penjumlahan(int $a, int $b) {
    $hasil = $a + $b;
    echo "$a + $b = $hasil" . PHP_EOL;
}

penjumlahan(100,100); // sukses
penjumlahan("100","100"); // sukses
// penjumlahan("100", "salah"); // error, parameter harus int tapi kita mengirim string
penjumlahan(true, false);
penjumlahan(true, 100);
// penjumlahan([],[]); // error, kita mengirim array padahal parameter harus int



// VARIABLE-LENGTH ARGUMENTS LIST
// variable-length argument list adalah kemampuan dimana satu parameter dapat menerima banyak data
// nantinya setiap data yang diinputkan dan dimasukan ke parameter akan dicombine menjadi array
// lantas apa bedanya dengan array ? perbedaanya sendiri ada pada pengiriman data
// kita tidak perlu manual membuat array lalu mengirimkannya ataupun manual membuat type declaration array
// variable argument list harus ditempatkan diposisi terakhir
// untuk membuatnya sebelum nama argument kita perlu menambahkan (...)

function sumAll(...$values) { // kita rubah menjadi VARIABLE-LENGTH ARGUMENT LIST
    $total = 0;
    foreach($values as $value){
        $total += $value;
    }
    echo "Total dari " . implode(",", $values) . " adalah = " . $total . PHP_EOL;
}

// perbedaanya sendiri antara variable argument list dan array hanya ada pada pemanggilan datanya
// untuk argument list kita tidak perlu membuat array, tapi langsung ketikan datanya 
sumAll(1,2,3,4,5); // (argument list)
// jika menggunakan type declaration array maka kita peru membuat arraynya terlebih dahulu
// sumAll([1,2,3,4,5]); // (Type declarations Array)

$nilai = [1,2,3,4,5,6];
// bagaimana semisal kita sudah mempunyai data arraynya dan ingin mengirimkan ke function dengan tipe data argument list
// disaat kita mengirim data array ke function dengan tipe argument list maka akan error
// sumAll($nilai); // error, karena kita mengirim array sedangkan parameter nantinya akan di-combine menjadi array
// caranya kita bisa tambahkan titik tiga kali (...)
sumAll(...$nilai); // otomatis akan dikonversi menjadi variable argument list
