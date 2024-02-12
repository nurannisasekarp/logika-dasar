<?php
$bilangan1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bilangan2 = [77, 99, 55, 81, 45, 90, 91, 98];

$kelompok_sama = [];
$kelompok_tidak_sama = [];

foreach ($bilangan1 as $nilai) {
    if (in_array($nilai, $bilangan2)) {
        $kelompok_sama[] = $nilai;
    } else {
        $kelompok_tidak_sama[] = $nilai;
    }
}

foreach ($bilangan2 as $nilai) {
    if (!in_array($nilai, $bilangan1)) {
        $kelompok_tidak_sama[] = $nilai;
    }
}

foreach ($kelompok_sama as $nilai) {
    echo "Kelompok Pertama (Bilangan yang Sama): $nilai";
}
echo "<br>";

foreach ($kelompok_tidak_sama as $nilai) {
    echo "Kelompok Kedua (Bilangan yang Tidak Sama): $nilai";
}
?>
