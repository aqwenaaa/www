<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];
    if (strlen($password) < 8) {
        echo "Password terlalu pendek. Harus minimal 8 karakter.";
    } else {
        echo "Password valid.";
    }
}
?>
