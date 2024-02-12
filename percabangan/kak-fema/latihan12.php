<?php
//Di suatu rumah produksi memiliki jam kerja 8 jam. jika pegawai bekerja melebihi jam kerja berhak mendapatkan
//kompensasi berupa Rp. 50.000 di satu jam pertama dan Rp. 25.000 di jam berikutnya 
//jika Dani bekerja dari pukul 8 pagi Lalu pulang jam 10 malam, berapakah kompensasi nya

$jamNormal = 8;
$kompensasiSatu = 50000;
$kompensasiDua = 25000;

$jamMulai = 8;
$jamSelesai = 22;


$jumlahJam = $jamSelesai - $jamMulai;

if($jumlahJam > $jamNormal){
    $jumlahJamKompensasi = $jumlahJam - $jamNormal;
    if($jumlahJamKompensasi == 1){
        $kompensasi = $kompensasiSatu;
    } else {
        $kompensasi = (($jumlahJamKompensasi - 1) * $kompensasiDua) + $kompensasiSatu;
    }

    echo "Maka jumlah kompensasi yang di dapat Dani setelah bekerja dari jam 8 pagi sampai jam 10 malam adalah : " . number_format($kompensasi,0,".",".");
} else{
    echo "Maka Dani tidak mendapatkan kompensasi";
}
?>