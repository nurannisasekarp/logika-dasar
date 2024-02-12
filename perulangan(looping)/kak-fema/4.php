<?php
//buatlah tanda persegi dengan simbol bintang sebanyak 4 baris 
//dengan banyak bintang perbarisnya sebanyak 8 bintang. 
//persegi tersebut dibuat dua kali
for ($p = 1; $p <= 2; $p++) {
    for ($i = 1; $i <= 4; $i++) {
        for ($b = 1; $b <= 8; $b++) {
            echo " * ";
        }
        echo "<br>"; //agar bintang nya tidak memanjang, jadi ia akan mengikuti persegi ke2
    }
    echo "<br>"; // jarak antara persegi ke1 dan ke2
}

// $p merupakann varible dari penanda tersebuntuknya (blok) persegi
//for ($p = 1; $p <= 2; $p++)  untuk membuat dua blok persegi
// for ($i = 1; $i <= 4; $i++) untuk membuat setiap baris
// for ($b = 1; $b <= 8; $b++) untuk mencetak bintang dalam setiap baris
?>
