<?php

$databarang = [

    [
        "nama" => "pasta gigi",
        "harga1" =>'18000',
        "jumlah" =>'1',
    ],
    
    [
        "nama" => "sabun mandi",
        "harga2" =>'5000',
        "jumlah" =>'3',
    ],
    [
        "nama" => "aloe vera shet mask",
        "harga3" =>'15000',
        "jumlah" =>'5',
    ],
];
echo "<ol>";


    $totalHarga = 0;


foreach ($databarang as $barang) {
   
    $harga = 0;
    foreach ($barang as $key => $value) {
        if (strpos($key, 'harga') !== false) {
            $harga +=$value;
        }
    }

    $jumlah =  $barang['jumlah'];

   
    $totalHarga += $harga * $jumlah;
}


echo "Total Harga: " . $totalHarga;

?>