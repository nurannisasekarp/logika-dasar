<?php
$kehadiran_hadir = 100;
$kehadiran_sakit_izin = 3;
$kehadiran_alfa = 5;

$persentase_kehadiran = ($kehadiran_hadir > 0) ? (($kehadiran_hadir - $kehadiran_sakit_izin - $kehadiran_alfa) . "%") : "Tidak Ada Kehadiran";

echo "Persentase Kehadiran: " . $persentase_kehadiran;
?>
