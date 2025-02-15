<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="../jquery-3.7.1.js"></script>
    <title>Form Rata-Rata Nilai</title>
</head>
<body>
    <h1>Form Rata-Rata Nilai</h1>
    <form id="gradeForm">
        <input type="number" id="nilai1" placeholder="Nilai 1" required>
        <input type="number" id="nilai2" placeholder="Nilai 2" required>
        <input type="number" id="nilai3" placeholder="Nilai 3" required>
        <button type="submit">Hitung Rata-Rata</button>
    </form>
    <div id="averageResult"></div>

    <script>
        $(document).ready(function() {
            $("#gradeForm").submit(function(e) {
                e.preventDefault();
                var nilai1 = parseFloat($("#nilai1").val());
                var nilai2 = parseFloat($("#nilai2").val());
                var nilai3 = parseFloat($("#nilai3").val());
                var average = (nilai1 + nilai2 + nilai3) / 3;
                $("#averageResult").html("Rata-rata Nilai: " + average.toFixed(2));
            });
        });
    </script>
</body>
</html>
