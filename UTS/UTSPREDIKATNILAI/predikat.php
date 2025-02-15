<?php
    $nilai = $_POST['nilai'];
    if ($nilai >= 81) {
        $predikat = 'A';
    } elseif ($nilai >= 74) {
        $predikat = 'B+';
    } elseif ($nilai >= 64) {
        $predikat = 'B';
    } elseif ($nilai >= 61) {
        $predikat = 'C+';
    } elseif ($nilai >= 51) {
        $predikat = 'C';
    } elseif ($nilai >= 40) {
        $predikat = 'D';
    } else {
        $predikat = 'E';
    }

    echo "<script>alert('Predikat Anda: $predikat');</script>";
?>
