<?php

$pesan = "Saya arek malang";
echo strrev($pesan) . "<br>";

echo "<br>";

$pesan = "saya arek malang";
$pesanPerKata = explode(" ", $pesan);
$pesanPerKata = array_map(fn ($pesan) => strrev($pesan), $pesanPerKata);
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";
