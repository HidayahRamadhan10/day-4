<?php

$barang = [
  [ 'nama' => 'Ban, ', 'diskon' => '10%' ],
  [ 'nama' => 'oli mesin, '],
  [ 'nama' => 'kampas rem, '],
  [ 'nama' => 'busi, ', 'diskon' => '9%' ],
  [ 'nama' => 'akumulator, ', 'diskon' => '7%' ],
 ];

 $barangDenganDiskon = [];

 foreach ($barang as $key) {
    if(isset($key['diskon'])) {
        $barangDenganDiskon[] = $key;
    }
}
 echo "barang dengan diskon : <br>";

 foreach ($barangDenganDiskon as $key) {
    echo "<br> Nama :" . $key['nama'];
    if(isset($key['diskon'])) {
        echo "Diskon : ". $key['diskon'];
    }
    echo "<br>";
 }
 ?>
