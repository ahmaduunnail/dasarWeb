<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$penigkatanharian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $penigkatanharian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i < $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang dipanen adalah: $jumlahBuah";

echo "<br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;


foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo "<br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br>";

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);

unset($nilaiSiswa[0]);
unset($nilaiSiswa[0]);
unset($nilaiSiswa[count($nilaiSiswa) - 1]);
unset($nilaiSiswa[count($nilaiSiswa) - 1]);

$totalNilai = array_sum($nilaiSiswa);
$rataRata = $totalNilai / count($nilaiSiswa);

echo "Total nilai yang digunakan: $totalNilai <br>";
echo "Rata-rata: $rataRata";

echo "<br>";

$hargaBarang = 120000;
$kondisiDiskon = 100000;

if ($hargaBarang > $kondisiDiskon) {
    $diskon = 0.2;
    $hargaAfterDiskon = $hargaBarang - ($hargaBarang * $diskon);

    echo "Selamat anda menpata diskon sebesar 20%, harga barang anda menjadi $hargaAfterDiskon";
} else {
    echo "Harga barang anda $hargaBarang";
}

echo "<br>";

$skor = 700;

$total_skor = "Total skor pemain: $skor";
$hadiah_tambahan = $skor > 500 ? "YA" : "TIDAK";

echo $total_skor . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah_tambahan";
