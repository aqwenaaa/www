<?php
// Struktur Kontrol
$nilaiNumerik = 92;
//Pernyataan Kondisional
if($nilaiNumerik >= 90 && $nilaiNumerik <= 100) 
{
    echo "Nilai huruf : A";
}
else if($nilaiNumerik >= 80 && $nilaiNumerik < 90)
{
    echo "Nilai huruf : B";
}
else if($nilaiNumerik >= 70 && $nilaiNumerik < 80)
{
    echo "Nilai huruf : C";
}
else if($nilaiNumerik >= 60 && $nilaiNumerik < 70)
{
    echo "Nilai huruf : D";
}

// Perulangan

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while($jarakSaatIni < $jarakTarget)
{
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "<br>";
echo "<br>";

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer";

//Pernyataan Pengendailian Aliran
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++)
{
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "<br>";
echo "<br>";

echo "Jumlah buah yang akan dipanen adalah : $jumlahBuah";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor)
{
    $totalSkor += $skor;
}

echo "<br>";
echo "<br>";

echo "Total skor ujian adalah : $totalSkor";
echo "<br>";


$nilaiSiswa = [85, 92, 58, 64, 90, 55, 79, 70, 96];
foreach ($nilaiSiswa as $nilai)
{
    if ($nilai < 60)
    {
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br>";
echo "<br>";
echo "---------Soal Cerita 1---------";
echo "<br>";

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

$nilaiYangDigunakan = array_slice($nilaiSiswa, 2, 6); // ambil nilai dari indeks ke-2 sampai ke-7

$totalNilai = array_sum($nilaiYangDigunakan);

echo "Total nilai yang digunakan: {$totalNilai}";

echo "<br>";
echo "<br>";

echo "---------Soal Cerita 2---------";
echo "<br>";

$hargaProduk = 120000;

// Diskon 20% jika harga lebih dari Rp 100.000
$diskon = ($hargaProduk > 100000) ? 0.2 : 0; 

$hargaSetelahDiskon = $hargaProduk - ($hargaProduk * $diskon);

echo "Harga setelah diskon: Rp {$hargaSetelahDiskon}";

echo "<br>";
echo "<br>";

echo "---------Soal Cerita 3---------";
echo "<br>";

$poinPemain = 550;

$hadiahTambahan = ($poinPemain > 500) ? 'YA' : 'TIDAK';

echo "Total skor pemain adalah: {$poinPemain} <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? {$hadiahTambahan}";

?>