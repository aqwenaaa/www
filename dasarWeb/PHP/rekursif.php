<?php
function tampilkanAngka(int $jumlah, int $indeks = 1){
    echo "Perulangan ke_{$indeks} <br>";

    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}
tampilkanAngka(20);
?>