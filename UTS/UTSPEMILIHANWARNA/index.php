<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="../jquery-3.7.1.js"></script>
    <script src="../script.js"></script>
    <title>Pemilihan Warna</title>
    <style>
        .color-box {
            display: inline-block;
            width: 50px;
            height: 50px;
            margin: 5px;
            cursor: pointer;
            border: 2px solid transparent;
        }
        .color-box.selected {
            border: 2px solid black; /* Border untuk kotak yang dipilih */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Pemilihan Warna</h1>
        <form id="colorForm" method="post">
            <input type="text" name="name" placeholder="Masukkan Nama" required>
            <div id="colorOptions">
                <div class="color-box" style="background-color: red;" data-color="merah"></div>
                <div class="color-box" style="background-color: orange;" data-color="oranye"></div>
                <div class="color-box" style="background-color: yellow;" data-color="kuning"></div>
                <div class="color-box" style="background-color: green;" data-color="hijau"></div>
                <div class="color-box" style="background-color: blue;" data-color="biru"></div>
                <div class="color-box" style="background-color: black;" data-color="hitam"></div>
                <div class="color-box" style="background-color: pink;" data-color="pink"></div>
                <div class="color-box" style="background-color: purple;" data-color="ungu"></div>
                <div class="color-box" style="background-color: white; border: 1px solid black;" data-color="putih"></div>
            </div>
            <input type="hidden" name="color" id="selectedColor" required>
            <button type="submit">Simpan Warna</button>
        </form>
        <div id="result"></div>
    </div>
    <script>
        // Menangani pemilihan warna
        const colorBoxes = document.querySelectorAll('.color-box');
        colorBoxes.forEach(box => {
            box.addEventListener('click', function() {
                // Menghapus kelas 'selected' dari semua kotak
                colorBoxes.forEach(b => b.classList.remove('selected'));
                // Menambahkan kelas 'selected' pada kotak yang dipilih
                this.classList.add('selected');
                // Mengatur nilai warna yang dipilih ke input tersembunyi
                document.getElementById('selectedColor').value = this.getAttribute('data-color');
            });
        });
    </script>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $color = htmlspecialchars($_POST['color']);
        
        echo "<script>
            var correctAnswer = '$color';
            var userAnswer = prompt('Warna apakah yang disukai oleh $name?');
            if (userAnswer.toLowerCase() === correctAnswer) {
                alert('Benar!');
            } else {
                alert('Salah! Coba lagi.');
            }
        </script>";
    }
    ?>
</body>
</html>