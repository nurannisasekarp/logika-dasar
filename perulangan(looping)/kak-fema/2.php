<?php
// memunculkan text dengan output heading size berbeda sebanyak 5 kali
for ($i = 1; $i <= 5; $i++) {
    echo "<h$i>Heading $i</h$i>";
}

//agar output merupakan heading size maka pada saat echo kita dapat memasukin tag heading html
// tag <h1><h1> merupakan contoh tag heading nya, dengan looping, maka nilai $i akan terus bertambah dan berlanjut sampai nilai $i sama dengan 5.
// hasil dari proses nilai $i yang terus bertambah (sampai bernilai 5) akan tersimpan di $i
// maka saat kita echo dengan memasukkan $i kedalam tag <h1><h1> secara otomatis akan diproses juga sebagai heding size html yang otputnya seperti text hasil heading size html
?>
