<?php

// operator penugasan adalah operator yang digunakan untuk memberi atau merubah value terhadap variable
// sebelumnya kita sudah menggunakan operator (=) untuk merubah value ataupun memberi value terhadap variable
// namun terdapat operator penugasan khusus untuk operasi aritmatika
// ini semacam shortcut untuk menyingkat penulisan

$total = 0;

$buah = 12_000;
$ayam = 37_000;
$jus = 15_000;

// sebelumnya jika kita ingin melakukan iterasi dengan menggunakan variable total sendiri
// kita cukup tuliskan
// $total = $total + $buah;
// $total = $total + $ayam;
// $total = $total + $jus;

// kita bisa menyingkatnya
$total += $buah; // ini seolah $total = $total + $buah
$total += $ayam; // $total = $total + $ayam
$total += $jus; // $total = $total + $jus


// kita var_dump
var_dump($total);