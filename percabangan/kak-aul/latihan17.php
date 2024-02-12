<?php
$pukul = "19:00";
echo (strtotime($pukul) >= strtotime("12:00")) ? date("g:i A", strtotime($pukul))  : date("g:i A", strtotime($pukul)) ;

//strtorime berfungsi untuk mengkonversi waktu dengan 12.00
//untuk mengkonversi waktu dengan format date antara pm dan am

?>