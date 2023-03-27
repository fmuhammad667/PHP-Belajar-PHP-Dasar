<?php
// string merupakan tipe data yang merepersentasikan teks atau kalimat
// bisa kosong ataupun tidak terhingga

// single quote
echo 'Name : ';
echo "Fadhil Muhammad Kyouya";
echo "\n"; // escape sequence

// double quote
echo "Nama : ";
echo "Fadhil\t Muhammad\t Kyouya\n";

// multiline string
// heredoc (double quote)
echo <<< HEREDOC
terdapat fitur multiline diphp 
seperti heredoc dan juga nowdoc
ini bisa kita gunakan dibanding kita menulis per-baris
lalu selanjutnya kita tambahkan dibaris "tanda enter" \\n
ini memudahkan kita
HEREDOC;

// nowdoc (single qoute)
echo <<< 'NOWDOC'
fitur yang kedua setelah heredoc adalah nowdoc
perbedaanya sendiri dengan heredoc
untuk nowdoc bisa kita repersentasikan ini merupakan multiline
namun dengan menggunakan kutip satu 
berbeda dengan heredoc ia merupakan fitur multiline 
namun dengan menggunakan kutip dua
nowdoc pun tidak bisa menggunakan "escape sequence" \n
ataupun parsing variable
NOWDOC;