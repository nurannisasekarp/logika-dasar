<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

//menggabungkan
$bilangan = array_merge(array_unique($bil1), array_unique($bil2));

// mengurutkan
rsort($bilangan);

foreach ($bilangan as $output) {
    echo "Bilangan setelah digabung dan diurutkan dari terbesar ke terkecil: $output";
}

// array_merge berfungsi untuk menggabungkan dua array
// array_unique berfungsi untuk menghapus duplikat dari kedua array tersebut(apabila terdapat angka yang sama
// rsort berfungsi untuk mengurutkan dari yang terbesar (variable dari $bilangan yang sudah terdaapat data dari dua array)
// sort menggabungkan dari yg terkecil
// array sum menjumlahkan 
// count menghitung

?>
