<?php

// Membuat array variabel dari JSON
$jsonData = '{"nama":"Firman","usia":20,"pekerjaan":"Mahasiswa","hobi":["Membaca","Bersepeda","Coding"]}';

$arraydata = json_decode($jsonData, true);

// Menampilkan data dengan label
echo "Nama: " . $arraydata["nama"] . "<br>";
echo "Usia: " . $arraydata["usia"] . "<br>";
echo "Pekerjaan: " . $arraydata["pekerjaan"] . "<br>";
echo "Hobi: " . implode(", ", $arraydata["hobi"]) . "<br>";

?>
