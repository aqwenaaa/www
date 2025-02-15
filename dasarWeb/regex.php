<?php
// Cocokkan huruf kecil
$pattern = '/[a-z]/'; // Pola untuk mencocokkan huruf kecil
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!<br>";
} else {
    echo "Tidak ada huruf kecil!<br>";
}

// Cocokkan satu atau lebih digit
$pattern = '/[0-9]+/'; // Pola untuk mencocokkan satu atau lebih digit
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>"; // Menggabungkan string dengan hasil cocok
} else {
    echo "Tidak ada yang cocok!<br>";
}

// Ganti "apple" dengan "banana"
$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text . "<br>"; // Output: "I like banana pie."

// Cocokkan pola "go*d" (contoh: "god", "good", "gooood")
// Cocokkan pola "go{1,2}d" (contoh: "god", "good", tapi tidak "gd" atau "gooood")
$pattern = '/go{1,2}d/'; // Pola untuk mencocokkan "g" diikuti oleh 1-2 huruf "o", lalu "d"
$text = 'gd god good gooood';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>"; // Menggabungkan string dengan hasil cocok
} else {
    echo "Tidak ada yang cocok!<br>";
}

?>
