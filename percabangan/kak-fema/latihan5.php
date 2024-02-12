<?php
$angka1 = 10;
$angka2 = 3;

$hasil = $angka1 / $angka2;
$hasilAkhir = round($hasil);

if (is_float($hasil)) {
    echo "$angka1 : $angka2 = $hasil maka jika dibulatkan $hasilAkhir";
} else {
    echo "$angka1 : $angka2 = $hasil";
}
?>
