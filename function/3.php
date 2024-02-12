<?php
function bandingNama($nama1, $nama2) {
    $panjangNama1 = strlen($nama1);
    $panjangNama2 = strlen($nama2);

    if ($panjangNama1 > $panjangNama2) {
        $namaTerbanyak = $nama1;
        $selisihKarakter = $panjangNama1 - $panjangNama2;
    } elseif ($panjangNama1 < $panjangNama2) {
        $namaTerbanyak = $nama2;
        $selisihKarakter = $panjangNama2 - $panjangNama1;
    } else {
        // Jika jumlah karakter sama
        $namaTerbanyak =  "Kedua nama memiliki jumlah karakter yang sama";
        $selisihKarakter = 0;
    }

    echo "Nama dengan jumlah karakter terbanyak: $namaTerbanyak <br>";

    echo "Selisih jumlah karakter antara kedua nama: $selisihKarakter";
}
bandingNama("Tzuyu", "Tian");

// fungsi strlen adalah untuk menentukkan panjang string

?>
