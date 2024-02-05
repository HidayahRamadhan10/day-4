<?php

$data_nama = [
	[
	'nama'=>'Andi', 
	'rombel'=>'PPLG XI-1', 
	'rayon'=>'Ciawi 4',
	'jk'=>'L',
	],
	[
	'nama'=>'Sasa', 
	'rombel'=>'PPLG XI-6', 
	'rayon'=>'Sukasari 1',
	'jk'=>'P',
	],
	[
	'nama'=>'Lala', 
	'rombel'=>'PPLG XI-3', 
	'rayon'=>'Cisarua 3',
	'jk'=>'P',
	],
	[
	'nama'=>'Beni', 
	'rombel'=>'PPLG XI-2', 
	'rayon'=>'Cicurug 2',
	'jk'=>'L',
	],
];
    
    foreach ($data_nama as $key ) {
        echo  "nama :".$key['nama']."<br>";
        echo  "rombel :".$key['rombel']."<br>";
        echo  "rayon :".$key['rayon']."<br>";
        echo  "jenis_kelamin :".$key['jk']."<br><br>";
    }