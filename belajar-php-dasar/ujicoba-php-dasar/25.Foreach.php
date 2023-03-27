<?php

// manual, tanpa menggunakan foreach
$arr1 = ["Fadhil", true, 123, 16.7, [1,2,3]];

for ($i = 0; $i < count($arr1); $i++){
    echo $arr1[$i] . PHP_EOL;
}

$people = array("Fadhil", "Heinz", "Tadamichi", "Yamamoto");
for ($i = 0; $i < count($people); $i++){ // jika menggunakan <= maka akan mengakses data selanjutnya
    echo $i . ". " . $people[$i] . PHP_EOL;
}

$nama = ["Asep", "Budi", "Cacha", "Dewi"];
foreach ($nama as $nam){
    // yang harus digunakan adalah setelah kata kunci as
    // jika menggunakan array sebelum as maka akan error
    echo $nam . PHP_EOL; 
}

$arr2 = [
    "nama" => "Hilmad Kyouya",
    "alamat" => "Ciparay",
    "negara" => "Wilayah Kerajaan Sunda",
];

foreach ($arr2 as $ar2){
    echo $ar2 . PHP_EOL;
}

echo $ar2 . PHP_EOL; // bisa terakses coy
echo $ar2 . PHP_EOL; // bisa terakses coy
echo $ar2 . PHP_EOL; // bisa terakses coy

foreach ($arr2 as $key => $value){
    echo $key . ": " . " $value" . PHP_EOL;
}

$arr2 = [
    "nama" => "Hilmad Kyouya",
    "alamat" => "Ciparay",
    "negara" => "Wilayah Kerajaan Sunda",
    "array" => [
        "test" => "uwu",
        "coba" => "cina",
        "coba" => "cina",
    ]
];

foreach($arr2["array"] as $key => $value){
    echo "$key : " . "$value" . PHP_EOL;
    echo "$key : " . "$value" . PHP_EOL;
}

foreach($arr2 as $key => $value){
    echo "$key : " . $value . PHP_EOL;
        foreach($arr2["array"] as $key => $value){
            echo "$key : " . "$value"  . PHP_EOL;
    }
}
echo $key . PHP_EOL; // bisa terakses diluar scope