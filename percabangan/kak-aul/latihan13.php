<?php
//waktu tidur yang baik untuk anak usia 6-12 adalah 10 jam. 
//untuk usia 12-18 adalah 8-9 jam. untuk usia 18-40 adalah 7-8 jam.
//apabila seseorang berusia 17 tahun berapa waktu tidur yang baik? 
$usia = 19;

$jam1 = 10;
$jam2a = 8;
$jam2b = 9;
$jam3 = 7;

if ($usia >= 6 && $usia <= 12) {
    echo "waktu tidur untuk usia 6-12 tahun adalah : $jam1 jam";
} elseif ($usia > 12 && $usia <= 18) {
    echo "waktu itu untuk usia 12-18 tahun adalah : $jam2a-$jam2b jam";
} elseif($usia > 18 && $usia <= 40) {
    echo "waktu tidur untuk usia 18-40 tahun adalah : $jam3-$jam2b jam";
} else{
    echo "Waktu tidur tidak diketahui";
}
?>