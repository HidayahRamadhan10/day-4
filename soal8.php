<?php

$bilangan = array(75, 77, 87, 70, 90, 81, 69, 87, 66);

$kompeten = array();
$belumKompeten = array();

foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        $kompeten[] = $nilai;
    } else {
        $belumKompeten[] = $nilai;
    }
}

echo "Kelompok Kompeten: ";
foreach ($kompeten as $nilai) {
    echo $nilai . " ";
}

echo "<br>";

echo "Kelompok Belum Kompeten: ";
foreach ($belumKompeten as $nilai) {
    echo $nilai . " ";
}

?>