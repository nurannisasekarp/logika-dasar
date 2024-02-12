<?php
//menghasilkan 10
function perkalianLima(&$angka) { //Di dalam fungsi, parameter yang dilewatkan diubah nilainya secara langsung karena menggunakan tanda & sebelum nama parameter. Variabel $angka sekarang memiliki nilai 2.

    echo $angka *= 5;
  }
  
  $no = 2;
  perkalianLima($no); //10
  echo $no; // berubah jadi 10
  
  //menghasilkan 2
  function perkalian_lima($ang_ka) {
    echo $ang_ka *= 5;
  }
  
  $no2 = 2;
  perkalian_lima($no2); //10
  echo $no2; // tetap 2


  //perbedaan jika memakai "&" maka nilai nya berubah di dalam fungsi maupun diluar fungsi
?>