<?php
    $nilai = $_POST['nilai'];
    $nilaiArray = explode(",", $nilai);
    sort($nilaiArray);

    echo "<script>alert('Ranking: " . implode(", ", $nilaiArray) . "');</script>";
?>
