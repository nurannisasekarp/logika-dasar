<?php

$tahunSekarang = date("Y");
$tahunKelahiran = 2004;

$usia = $tahunSekarang - $tahunKelahiran;

if ($usia >= 17) {
    echo "Tahun kelahiran $tahunKelahiran sudah memiliki KTP. Dan berusia $usia";
} else {
    echo "Tahun kelahiran $tahunKelahiran belum memiliki KTP.";
}

?>
