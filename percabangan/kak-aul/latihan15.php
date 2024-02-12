<?php
$harga_nasi_goreng = 15000;
$harga_ayam_bakar = 20000;
$harga_nasi_kebuli = 25000;

$jumlah_nasi_goreng = 2;
$jumlah_ayam_bakar = 1;
$jumlah_nasi_kebuli = 2;

$jumat = 0.05;
$senin = 0.02;

$total_harga = ($jumlah_nasi_goreng * $harga_nasi_goreng) + ($jumlah_ayam_bakar * $harga_ayam_bakar) + ($jumlah_nasi_kebuli * $harga_nasi_kebuli);
$harga_jumat = $total_harga * $jumat;
$harga_senin = $total_harga * $senin;


$hari_ini = date("D"); 

if ($hari_ini == "Friday") {
    echo "Maka total yang harus dibayar oleh Dani sebesar Rp $harga_jumat";
} elseif ($hari_ini == "Monday") {
    echo "Maka total yang harus dibayar oleh Dani sebesar Rp $harga_senin";
} else {
    echo "Maka total yang harus dibayar oleh Dani sebesar Rp $total_harga";
}
?>