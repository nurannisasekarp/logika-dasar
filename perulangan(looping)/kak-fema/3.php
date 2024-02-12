<?php

for ($i = 1; $i <= 11; $i++) {
    $angka = $i * 5;
    if (strpos($angka, '0') === false) {
        echo $angka . " ";
    }
}

// output yang diminta ialah perkalian 5 dengan angka berapun yang berakhir di angka 55 namun juga tidaak boleh ada angka 0 
// $i akan terus bertembah/berlanjut sampai nilai $i sama dengan 11 (karena 55 itu 5 x 11)
// nilai $i merupakan nilai yang nantinya akan dikalikan dengan 5, dan dalam proses perkalian tersebut
// hasil nilai yang dikalikan akan masuk ke variable $angka
// 'strpos' dalam syntax nya 'strpos(string, substring )' substring sendiri bisa dianoligikan sebagai apa yang dicari dari string tersebut. jika substring tidak ditemukan dalam string, maka fungsi ini akan mengembalikan "nilai false" yang dimana itu true
// '=== false' fungsi tersebut sebagai memeriksa nilai dan tipe data apakah bersifat false
//jika nilai tersebut bersifat false maka akan echo dengan menampilkan variable $angka hasil perkalian $i dengan 5 yang hasilnya hanya sampai angka 55
?>
