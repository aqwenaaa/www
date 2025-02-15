<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah  : {$hasilTambah} <br>";
echo "Hasil Kurang  : {$hasilKurang} <br>";
echo "Hasil Kali    : {$hasilKali} <br>";
echo "Hasil Bagi    : {$hasilBagi} <br>";
echo "Sisa Bagi     : {$sisaBagi} <br>";
echo "Pangkat       : {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;
echo "<br>";
// Menampilkan hasil perbandingan dengan konversi boolean ke string
echo "Apakah a == b? : " . ($hasilSama ? 'Benar' : 'Salah') . "<br>";
echo "Apakah a != b? : " . ($hasilTidakSama ? 'Benar' : 'Salah') . "<br>";
echo "Apakah a < b?  : " . ($hasilLebihKecil ? 'Benar' : 'Salah') . "<br>";
echo "Apakah a > b?  : " . ($hasilLebihBesar ? 'Benar' : 'Salah') . "<br>";
echo "Apakah a <= b? : " . ($hasilLebihKecilSama ? 'Benar' : 'Salah') . "<br>";
echo "Apakah a >= b? : " . ($hasilLebihBesarSama ? 'Benar' : 'Salah') . "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
echo "<br>";
// Menampilkan hasil operasi logika
echo "Hasil dari a && b (AND): " . ($hasilAnd ? 'Benar' : 'Salah') . "<br>";
echo "Hasil dari a || b (OR): " . ($hasilOr ? 'Benar' : 'Salah') . "<br>";
echo "Hasil dari !a (NOT a): " . ($hasilNotA ? 'Benar' : 'Salah') . "<br>";
echo "Hasil dari !b (NOT b): " . ($hasilNotB ? 'Benar' : 'Salah') . "<br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;  
echo "<br>";
// Menampilkan hasil operasi penjumlahan, pengurangan, perkalian, pembagian
echo "Hasil a += b : $a <br>";
echo "Hasil a -= b : $a <br>";
echo "Hasil a *= b : $a <br>";
echo "Hasil a /= b : $a <br>";
echo "Hasil a %= b : $a <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "<br>";
// Menampilkan hasil perbandingan identik dengan konversi boolean ke string
echo "Apakah a identik dengan b? : " . ($hasilIdentik ? 'Benar': 'Salah') . "<br>";
echo "Apakah a tidak identik dengan b? : " . ($hasilTidakIdentik ? 'Benar' : 'Salah') . "<br>";

echo "--------Soal Cerita--------";
echo "<br>";
$totalKursi = 45;
$kursiTerisi = 28;

$persentaseKursiKosong = ($totalKursi / $kursiTerisi) * 100;
$kursiKosong = $totalKursi - $kursiTerisi;
echo "Total kursi : {$totalKursi} <br>";
echo "Kursi terisi : {$kursiTerisi} <br>";
echo "Kursi kosong : {$kursiKosong} <br>";
echo "Persentase kursi kosong: {$persentaseKursiKosong}% <br>";
?>
