<?php
$berat_badan = 44;
$tinggi_badan = 148;

$imt = $berat_badan / (($tinggi_badan / 100) ^ 2);

if ($imt < 18.5) {
   echo "Beni termasuk dalam kategori berat badan kurang";
} elseif ($imt >= 18.5 && $imt < 22.9) {
    echo "Beni termasuk dalam kategori Normal";
} elseif ($imt >= 22.9 && $imt < 24.9) {
    echo "Beni termasuk dalam kategori berat badan lebih";
} elseif ($imt >= 25) {
    echo "Beni termasuk dalam kategori obesitas";
} else {
    echo "Tidak diketahui";
}

?>