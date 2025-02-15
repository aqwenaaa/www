<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="script.js"></script>
    <title>Form Ranking Mahasiswa</title>
</head>
<body>
    
    <div class="container">
        <h1>Form Ranking Mahasiswa</h1>
        <form id="rankingForm">
            <input type="text" name="name" placeholder="Nama Mahasiswa" required>
            <input type="number" name="score" placeholder="Nilai" required>
            <button type="submit">Tambah Data</button>
        </form>
        <div id="result"></div>
    </div>
</body>
</html>