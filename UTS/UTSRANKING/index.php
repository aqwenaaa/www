<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="../jquery-3.7.1.js"></script>
    <script src="../script.js"></script>
    <title>Form Ranking</title>
</head>
<body>
    <div class="container">
        <h1>Form Ranking</h1>
        <form id="rankingForm" method="post">
            <input type="text" name="name[]" placeholder="Nama 1" required>
            <input type="number" name="nilai[]" placeholder="Nilai 1" required>
            <input type="text" name="name[]" placeholder="Nama 2" required>
            <input type="number" name="nilai[]" placeholder="Nilai 2" required>
            <button type="submit">Ranking</button>
        </form>
        <div id