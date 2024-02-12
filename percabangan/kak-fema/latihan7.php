<?php
$nama = "wikrama";
$panjangString = strlen($nama);

if ($panjangString > 0) {
    $hurufBelakang = $nama[$panjangString - 1];
    echo "Huruf belakang: $hurufBelakang";
} else {
    echo "Tidak terdeteksi";
}
?>
