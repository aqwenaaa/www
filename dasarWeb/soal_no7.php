<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi dan AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi dan AJAX</h1>
    
    <!-- Form untuk nama dan email -->
    <form id="myForm" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br><br>

        <input type="submit" value="Submit">
    </form>
    
    <br><br>

    <!-- Form untuk password -->
    <form id="passwordForm" method="post" action="proses_password.php">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br><br>
        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function() {
            // Validasi untuk form pertama (Nama dan Email)
            $("#myForm").submit(function(event) {
                event.preventDefault(); // Mencegah pengiriman form biasa
                
                var nama = $("#nama").val();
                var email = $("#email").val();
                var valid = true;

                // Validasi Nama
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                // Validasi Email
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                    $("#email-error").text("Format email tidak valid.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                if (valid) {
                    $.ajax({
                        url: 'proses_validasi.php',
                        method: 'POST',
                        data: { nama: nama, email: email },
                        success: function(response) {
                            alert("Response dari server: " + response);
                        },
                        error: function() {
                            alert("Terjadi kesalahan saat mengirim data.");
                        }
                    });
                }
            });

            // Validasi untuk form password
            $("#passwordForm").submit(function(event) {
                event.preventDefault(); // Mencegah pengiriman form biasa
                
                var password = $("#password").val();
                var valid = true;

                // Validasi Password (Minimal 8 Karakter)
                if (password.length < 8) {
                    $("#password-error").text("Password harus minimal 8 karakter.");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                if (valid) {
                    $.ajax({
                        url: 'proses_password.php',
                        method: 'POST',
                        data: { password: password },
                        success: function(response) {
                            alert("Response dari server: " + response);
                        },
                        error: function() {
                            alert("Terjadi kesalahan saat mengirim data.");
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
