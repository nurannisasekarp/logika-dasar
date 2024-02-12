<?php
function formatTanggal($tanggal) {
    // Array untuk konversi nama hari
    $namaHari = [
        'Sun' => 'Minggu',
        'Mon' => 'Senin',
        'Tue' => 'Selasa',
        'Wed' => 'Rabu',
        'Thu' => 'Kamis',
        'Fri' => 'Jumat',
        'Sat' => 'Sabtu'
     ];

    // Ganti nama hari dengan bahasa Indonesia
    $tanggal = strtr($tanggal, $namaHari);
    return $tanggal; // Kembalikan tanggal yang diformat
}

$tanggal = "Mon, 29 Jan 2024";
$tanggalAkhir = formatTanggal($tanggal);
echo $tanggalAkhir; 
?>
