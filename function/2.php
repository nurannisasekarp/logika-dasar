<?php
function formatAngka($angka) {
    if ($angka < 1000) { //skala ratusan
        return number_format($angka);
    } elseif ($angka < 1000000) {
        // skala ribuan
        $hasil = $angka / 1000;
        return number_format($hasil, 1) . 'K';
    } else {
        // skala jutaan
        $hasil = $angka / 1000000;
        return number_format($hasil, 1) . 'M';
    }
}

$angka1 = 9500;
$angka2 = 1700000;

echo formatAngka($angka1); 
echo "<br>";
echo formatAngka($angka2); 

// number_fotmat untuk mengecek format angka dengan menambahkan titik koma
// return yaitu mengembalikan nilai
// return number_format($hasil, 1) Maka fungsi dari number_format dan angka 1 itu maksud nya 1 angka dibelang koma
?>
