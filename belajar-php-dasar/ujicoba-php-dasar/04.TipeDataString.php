<?php

// Single Quote
echo 'Nama : ';
echo 'Fadhil Muhammad Kyouya';
echo "\n";

// Double Quote
echo "Nama : ";
echo "Jendral\t Tadamichi\t Kuribayashi\n";

// Heredoc
echo <<< INSERT
insert into database \n (a,b,c,d,e,)
values (a,b,c,d,e,)
finish bosss
INSERT;

// Nowdoc
echo <<<'DELETE'
delete from database
where \t
id=demikian \n
testing \n
DELETE;