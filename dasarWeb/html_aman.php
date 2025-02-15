<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Memeriksa dan membersihkan input
    if (isset($_POST['input'])) {
        $input = htmlspecialchars($_POST['input'], ENT_QUOTES, 'UTF-8');
    } else {
        echo "Input tidak ditemukan.<br>";
        exit; // Menghentikan proses jika input tidak ada
    }

    // Memeriksa apakah email valid
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "<br>";
            // Lanjutkan dengan pengolahan email yang aman
        } else {
            echo "Email tidak valid.<br>";
            exit; // Menghentikan proses jika email tidak valid
        }
    } else {
        echo "Email tidak ditemukan.<br>";
        exit; // Menghentikan proses jika email tidak ada
    }
} else {
    echo "Form belum dikirim.";
}
?>
