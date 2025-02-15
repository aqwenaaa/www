<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="../jquery-3.7.1.js"></script>
    <script src="../script.js"></script>
    <title>Predikat Nilai</title>
</head>
<body>
    <div class="container">
        <h1>Form Predikat Nilai</h1>
        <form id="gradeForm" method="post">
            <input type="number" name="nilai" placeholder="Masukkan Nilai" required>
            <button type="submit">Predikat Nilai</button>
        </form>
        <div id="result"></div>
    </div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = $_POST['nilai'];
    if ($nilai >= 81) {
        $predikat = "A";
        $motivasi = "Kerja kerasmu terbayar! Terus pertahankan!";
    } elseif ($nilai >= 74) {
        $predikat = "B+";
        $motivasi = "Bagus! Terus tingkatkan usaha dan fokus!";
    } elseif ($nilai >= 64) {
        $predikat = "B";
        $motivasi = "Cukup baik! Jangan berhenti belajar!";
    } elseif ($nilai >= 61) {
        $predikat = "C+";
        $motivasi = "Masih ada ruang untuk perbaikan. Ayo semangat!";
    } elseif ($nilai >= 51) {
        $predikat = "C";
        $motivasi = "Usahamu sudah baik, tapi bisa lebih baik lagi!";
    } elseif ($nilai >= 40) {
        $predikat = "D";
        $motivasi = "Jangan menyerah! Belajar lebih giat lagi!";
    } else {
        $predikat = "E";
        $motivasi = "Ini adalah kesempatan untuk bangkit! Ayo belajar lebih keras!";
    }
    $result = "Predikat nilai adalah $predikat. $motivasi";
    echo "<script>alert('$result');</script>";
}
?>
</body>
</html>