<?php

$hadir = true;
$tugas = true;
$nilai = 70;

if ($tugas && $hadir && $nilai >= 80){
    echo "Anda hari ini aman, nilai anda A" . PHP_EOL;
} else if ($tugas && $hadir && $nilai >= 70) {
    echo "Anda hari ini aman, nilai anda B" . PHP_EOL;
} else if ($tugas && $hadir && $nilai >= 60) {
    echo "Anda hari ini aman, nilai anda C" . PHP_EOL;
} else if ($tugas && $hadir && $nilai >= 50) {
    echo "Anda hari ini aman, nilai anda D" . PHP_EOL;
} else {
    echo "Anda hari ini ada kelas tambahan" . PHP_EOL;
}

// Syntax Alternative
if ($tugas && $hadir && $nilai >= 80) :
    echo "Anda hari ini aman, nilai anda A" . PHP_EOL;
elseif ($tugas && $hadir && $nilai >= 70) :
    echo "Anda hari ini aman, nilai anda B" . PHP_EOL;
elseif ($tugas && $hadir && $nilai >= 60) :
    echo "Anda hari ini aman, nilai anda C" . PHP_EOL;
elseif ($tugas && $hadir && $nilai >= 50) :
    echo "Anda hari ini aman, nilai anda D" . PHP_EOL;
else :
    echo "Anda hari ini ada kelas tambahan" . PHP_EOL;
endif;