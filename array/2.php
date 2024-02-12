<?php
$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];

foreach ( $data as $individu){
    $nama = $individu['nama'];
    $tahun = $individu['tahun'];

    $keterangan = ($tahun % 4 == 0 && ($tahun % 100 != 0))? 'termasuk tahun kabisat' : 'tidak termasuk tahun kabisat';
    
    echo "$nama lahir pada tahun $tahun yaitu $keterangan";
    echo "<br>";
}
//tahun kabisat ialah tahun yang dapat dibagi habis 4 dan tidak dapat dibagi habis 100
//pada $keterangan dilakukan proses if-else dengan ternary
// ? merupakan simbol if
// : merupakan simbol else
?>