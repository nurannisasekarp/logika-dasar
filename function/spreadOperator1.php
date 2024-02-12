<?php

function functjurusan(...$jurusan) {
    $listJurusan = array_unique(array_map('strtoupper', $jurusan));
    echo implode(", ", $listJurusan);
}

functjurusan("PPLG", "HTL", "pplg");

// (... $) spread operator berfungsi
// array_unique untuk menghapus duplikat 
// array_map untuk menerapkan fungsi strtoupper
// strtoupper untuk memastikan tidak ada duplikat karena perbedaan besar-kecil
// menggabungkan elemen-elemen array menjadi satu string, karena di dalam $jurusan_unik bernilai array
 