<?php

// Operator logika digunakan untuk membandingkan dua nilai boolean, tidak selainnya
// hasil dari operator logika adalah boolean lagi
// php mendukung penggunaan operator logika ini, seperti and, or, xor, dan not

// operator And
var_dump(true && true); // (true)
var_dump(true && false); // (false)
var_dump(false and true); // (false)
var_dump(false and false); // (false)

// operator Or
var_dump(true || false); // (true)
var_dump(true || true); // (true)
var_dump(false || true); // (true)
var_dump(false || false); // (false)

// operator Xor
var_dump(true xor false); // (true)
var_dump(true xor true); // (false)
var_dump(false xor true); // (true)
var_dump(false xor false); // (false)

// operator Not
var_dump(!true); // (false)
var_dump(!false); // (true)