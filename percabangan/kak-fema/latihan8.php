<?php
$mtk = 87;
$bIng = 85;
$bInd = 87;
$nilaiMtk = 88;
$nilaiBing = 86;
$nilaiBind = 87;
$minRatarata = 85;
$rataRata = 85;
$nilai =($nilaiMtk +$nilaiBing + $nilaiBind)/3;

if ($nilaiMtk >= $mtk && $nilaiBing >= $bIng && $nilaiBind >= $bInd && $nilai >= $minRatarata) {
    echo " Nilai  MTK, Bahasa Indonesia, Bahasa Inggris terpenuhi dengan rata-rata $nilai. Peserta dinyatakan  <span style=' color:green'> DITERIMA";
} else {
    echo "Nilai MTK, Bahasa Indonesia, Bahasa Inggris tidak terpenuhi dengan rata-rata $nilai. Peserta dinyatakan  <span style=' color:red'> TIDAK DITERIMA";;
}

?>