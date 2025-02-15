<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="../jquery-3.7.1.js"></script>
    <script src="../script.js"></script>
    <title>Tahun Kabisat</title>
</head>
<body>
    <div class="container">
        <h1>Form Tahun Kabisat</h1>
        <form id="leapYearForm" method="post">
            <input type="number" name="year" placeholder="Masukkan Tahun" required>
            <button type="submit">Cek Kabisat</button>
        </form>
        <div id="result"></div>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $year = $_POST['year'];
        $isLeap = ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
        $result = $isLeap ? "$year adalah tahun kabisat." : "$year bukan tahun kabisat.";
        echo "<script>displayResult(" . json_encode($result) . ");</script>";
    }
    ?>
</body>
</html>