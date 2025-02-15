$(document).ready(function() {
    let students = []; // Array untuk menyimpan data mahasiswa

    $("form").submit(function(event) {
        event.preventDefault();

        // Ambil data dari form
        const name = $("input[name='name']").val();
        const score = $("input[name='score']").val();

        // Tambahkan mahasiswa baru ke array
        students.push({ name: name, score: parseInt(score) });

        // Tampilkan alert
        alert("Data berhasil ditambahkan!");

        // Load dan tampilkan data
        loadStudents();
    });

    function loadStudents() {
        // Urutkan mahasiswa berdasarkan nilai
        students.sort((a, b) => b.score - a.score); // Urutkan descending

        // Tampilkan hasil dalam bentuk tabel
        let output = "<h2>Ranking Mahasiswa:</h2>";
        output += "<table border='1' cellpadding='10' cellspacing='0' style='width: 100%; text-align: left;'>";
        output += "<tr><th>Peringkat</th><th>Nama</th><th>Nilai</th></tr>";

        for (let rank = 0; rank < students.length; rank++) {
            output += `<tr><td>${rank + 1}</td><td>${students[rank].name}</td><td>${students[rank].score}</td></tr>`;
        }
        output += "</table>";

        $("#result").html(output);
    }
});