<?php

// Tipe Data Int

echo "Desimal : ";
var_dump(100); // desimal

echo "Hexadesimal : ";
var_dump(0x1A3); // hexadecimal

echo "Octal : ";
var_dump(017); // Octal

echo "Binary : ";
var_dump(0b1010101010); // Binary

echo "Underscore di Number : ";
var_dump(123_456_789); // Underscore


// Tipe Data Float

echo "Bilangan Float : "; // atau pecahan
var_dump(1.6);

echo "Floating point dengan E notation plus (1000) : ";
var_dump(1.6e3); // 1.6 x 1000

echo "Floating point dengan E notation min (0.001) : ";
var_dump(1.6e-3); // 1.6 x 0.001

echo "Underscore di Floating point : ";
var_dump(1.875_2334);

// Integer Overflow
echo "Integer Overflow 32-bit : ";
var_dump(2147483648);

echo "Integer Overflow 64-bit : ";
var_dump(9223372036854775808);