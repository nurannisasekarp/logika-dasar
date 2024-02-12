<?php
//Tampilkan angka-angka yang bisa dibagi dengan 4 dan 5, pada rentang 1-50
for ($i = 1; $i <= 50; $i++) {
    if ($i % 4 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }
}

// dalam proses nya "for ($i = 1; $i <= 50; $i++)" merupakan sebuah loop bahwa $i yaitu sama dengan 1 nilai $i akan terus bertambah satu dan akan terus berlanjut sampai $i sama dengan 50
// if ($i % 4 == 0 && $i % 5 == 0) dalam konteks code tersebut, maka "jika" nilai $i dapat dibagi 4  dan dibagi 5 habis (modulus dan hasil nya 0) maka nilai dalam $i tersebut merupakan kelipatan dari 4 dan juga 5 
?>