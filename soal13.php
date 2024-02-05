<?php

$data = [
    [
        'nama' => 'Andi',
        'tahun' => '2008',
    ],
    [
        'nama' => 'Beni',
        'tahun' => '2001',
    ],
    [
        'nama' => 'Dani',
        'tahun' => '2004',
    ],
    [
        'nama' => 'Eko',
        'tahun' => '2007',
    ],
];
echo "orang yg lahir di tahun kabisat adalah : ";

foreach ($data as $item) {
    $tahun_lahir = intval($item["tahun"]);
    
    if ($tahun_lahir % 4 == 0 && ($tahun_lahir % 100 != 0 || $tahun_lahir % 400 == 0)) {
        echo $item["nama"] . " ";
    }
}
?>