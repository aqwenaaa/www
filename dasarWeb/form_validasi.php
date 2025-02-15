<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form method="post" action="">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <br><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $nama = htmlspecialchars($_POST["nama"]);
        $email = htmlspecialchars($_POST["email"]);
        $errors = array();

        // Validasi Nama
        if (empty($nama)) {
            $errors[] = "Nama harus diisi.";
        }

        // Validasi Email
        if (empty($email)) {
            $errors[] = "Email harus diisi.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Format email tidak valid.";
        }

        // Jika ada kesalahan validasi
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        } else {
            // Lanjutkan dengan pemrosesan data jika semua validasi berhasil
            echo "Data berhasil dikirim:<br>Nama: $nama<br>Email: $email";
        }
    }
    ?>
</body>
</html>
