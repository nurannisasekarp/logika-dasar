<?php
$panjang_tanah = 13;
$lebar_tanah = 9;

$luas_tanah = $panjang_tanah * $lebar_tanah;

if ($luas_tanah < 90) {
    $kategori_rumah = "Tipe 36";
} elseif ($luas_tanah >= 90 && $luas_tanah < 96) {
    $kategori_rumah = "Tipe 45";
} elseif ($luas_tanah >= 96 && $luas_tanah < 120) {
    $kategori_rumah = "Tipe 54";
} elseif ($luas_tanah >= 120 && $luas_tanah < 150) {
    $kategori_rumah = "Tipe 60";
} elseif ($luas_tanah >= 150) {
    $kategori_rumah = "Tipe 70";
} else {
    $kategori_rumah = "Tidak diketahui";
}

echo "Rumah Dani masuk dalam kategori $kategori_rumah"; 
//untuk memudahkan output maka hasil if-else dapat dibuatkan variable kemudia pada echo dapat dipanggil
?>