<?php

function perkenalan()
{
    echo "Assamualaikum, ";
    echo "Perkenalkan, nama saya Elok<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan();

function perkenalan_2($nama, $salam)
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya" . $nama . "<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan_2("Hambdana", "Hallo");

echo "<br>";

$saya  = "Elok";
$ucapSalam = "Selamat pagi";

perkenalan_2($saya, $ucapSalam);

echo "<br>";

function perkenalan_3($nama, $salam="Assalamualaikum")
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya" . $nama . "<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan_3("Hambdana", "Hallo");

echo "<br>";

$saya  = "Elok";
$ucapSalam = "Selamat pagi";

perkenalan_3($saya);

echo "<br>";

function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "Umur saya adalah " . hitungUmur(1988, 2023) . "tahun";

echo "<br><br>";

function hitungUmur_1($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan_4($nama, $salam="Assalamualaikum")
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya" . $nama . "<br/>";

    echo "Saya berusia " . hitungUmur(1988, 2023) . "tahun<br>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan_4("Elok");