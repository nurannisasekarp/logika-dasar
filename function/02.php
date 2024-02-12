<?php
function hitungPecahanRupiah($jumlah) {
    $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 100, 50, 25, 10, 5, 1];

    echo "Jumlah Rupiah: " . number_format($jumlah, 0, ',', '.') . " ";
    echo "<br>";

    foreach ($pecahan as $pecahanUang) {
        $jumlahPecahan = floor($jumlah / $pecahanUang);

        if ($jumlahPecahan > 0) {
            echo "Rp. " . number_format($pecahanUang, 0, ',', '.') . " terdapat = " . "$jumlahPecahan pecahan ";
            echo "<br>";
            $jumlah -= $jumlahPecahan * $pecahanUang;
        }
    }
}

hitungPecahanRupiah(140500);

?>

