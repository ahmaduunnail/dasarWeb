<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "hasilTambah {$hasilTambah} <br>";
echo "hasilKurang {$hasilKurang} <br>";
echo "hasilKali {$hasilKali} <br>";
echo "hasilbagi {$hasilBagi} <br>";
echo "sisaBagi {$sisaBagi} <br>";
echo "pangkat {$pangkat} <br>";

echo "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "hasilSama {$hasilSama} <br>";
echo "hasilKurang {$hasilKurang} <br>";
echo "hasilLebihKecil {$hasilLebihKecil} <br>";
echo "hasilLebihBesar {$hasilLebihBesar} <br>";
echo "hasilLebihKecilSama {$hasilLebihKecilSama} <br>";
echo "hasilLebihBesarSama {$hasilLebihBesarSama} <br>";

echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "hasilAnd {$hasilAnd} <br>";
echo "hasilOr {$hasilOr} <br>";
echo "hasilNotA {$hasilNotA} <br>";
echo "hasilNotB {$hasilNotB} <br>";

echo "<br>";

$a1 = $a += $b;
$a2 = $a -= $b;
$a3 = $a *= $b;
$a4 = $a /= $b;
$a5 = $a %= $b;

echo "+= {$a1} <br>";
echo "-= {$a2} <br>";
echo "*= {$a3} <br>";
echo "/= {$a4} <br>";
echo "%= {$a5} <br>";

echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "hasilIdentik {$hasilIdentik} <br>";
echo "hasilTidakIdentik {$hasilTidakIdentik} <br>";


$totalKursi = 45;
$kursiterpakai = 28;
$kursiKosong = $totalKursi - $kursiterpakai;

$hasilPresentaseSisaKursiKosong = number_format(($kursiKosong / $totalKursi) * 100, 2);
echo "hasilpresentase kursi kosong {$hasilPresentaseSisaKursiKosong}";
