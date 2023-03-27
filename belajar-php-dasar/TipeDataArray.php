<?php

// tipe data array adalah kumpulan data yang bisa disimpan dalam satu variable
// array bisa berisikan kosong ataupun banyak data
// array pada php bisa berisi kumpulan tipe data
// di-php array bisa bersifat dinamis, artinya kita bisa tidak ada batasan untuk jumlah maksimum dari array
// penomoran dari data array menggunakan index, dimulai dari angka 0

// cara untuk membuat array ada dua 
// Pertama:
$angka = array(10,9,8,7,6.5,5);
var_dump($angka);

// Kedua:
$nama = ["Fadhil", "Muhammad", "Kyouya"];
var_dump($nama);

// array dapat kita manipulasi, terdapat beberapa operasi pada array

// untuk mengambil data
var_dump($nama[1]);

// mengubah data
$nama[0] = "Tadamichi";
var_dump($nama);

// menghapus data array
unset($nama[1]);
var_dump($nama);
// jika kita menghapus data di array 
// otomatis index di-array akan terhapus

// menambahkan data
$nama[1] = "Fadhil";
// jika kita iseng menambahkan data dengan index yang telah kita hapus
// data akan tetap masuk, namun data tetap akan ditempatkan diposisi terakhir
$nama[] = "Muhammad";
var_dump($nama);

// melihat jumlah data
var_dump(count($nama));



// di php array juga bisa dijadikan sebagai map
// map sendiri adalah asosiasi antara key dan value
// defaultnya disaat kita membuat tipe data array
// itupun sebenarnya adalah map, namun key-nya berupa auto increment dari int (index)
// namun pada map kita bisa ganti indexnya bukan lagi int, namun berupa string

$fadhil = array(
    "id" => "fadhil",
    "nama" => "Fadhil Muhammad",
    "umur" => 20,
    "alamat" => array(
        "kota" => "Bandung",
        "negara" => "Indonesia"
    )
);

var_dump($fadhil);
// jika kita printout, maka hasilnya sama dengan array biasa
// namun yang membedakan adalah key-nya

// semisal kita ingin mengakses data dari array key-map
// caranya sama saja seperti mengakses array pada sebelumnya
// hanya saja sekarang untuk mengaksesnya kita tidak menggunakan index nomor seperti sebelumnya
// namun menggunakan key sesuai yang kita buat
var_dump($fadhil["nama"]);

// kita juga bisa membuat key-map menggunakan cara pembuatan array nomor dua
$kyouya = [
    "id" => "kyouya",
    "nama" => "Mitsurugi Kyouya",
    "umur" => 20,
    "alamat" => [
        "kota" => "Bandung",
        "negara" => "Indonesia"
    ]
];

var_dump($kyouya);
// jika kita printout maka hasilnya sama saja seperti sebelumnya

// sesuai yang kita ketahui bahwa array itu menampung banyak tipe data
// sehingga kita juga bisa menambahkan array didalam array jika sekiranya memang perlu
// biasanya kasus ini digunakan semisal kita perlu ada data nested
// kita tambahkan data array didalam array pada array map sebelumnya

// bagaimana semisal kita ingin mengakses data indonesia 
// sebagaimana yang kita ketahui data indonesia datanya berada di array didalam array ?
// untuk mengaksesnya kita bisa akses secara berurutan
// pertama kita akses array parentnya lalu yang kedua akses child-nya
var_dump($fadhil["alamat"]["negara"]);