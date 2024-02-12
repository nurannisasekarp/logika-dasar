<?php
$totalBelanjaAndi = 180000;
$batasPotonganHarga = 100000;
$nilaiPotonganHarga = 10000;

if ($totalBelanjaAndi > $batasPotonganHarga) {
    $totalBelanjaAndi -= $nilaiPotonganHarga;
    echo "Andi mendapatkan potongan harga sebesar $nilaiPotonganHarga. Total yang harus dibayar: $totalBelanjaAndi";
} else {
    echo "Belanja Andi tidak memenuhi syarat untuk potongan harga. Total yang harus dibayar: $totalBelanjaAndi";
}
?>



