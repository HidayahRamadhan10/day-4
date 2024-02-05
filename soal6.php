<?php

$c = 0;

for ($a = 5; $a <= 25; $a += 5) {
    if (225 % $a == 0) {
        $c++;
    }
}

echo "bilangan 225 bisa dibagi habis oleh kelipatan 5 sebanyak $c kali";
?>