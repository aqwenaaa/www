<?php
$serverName = "AQUEENA-IMUT"; 
$connectionInfo = array("Database" => "prestasi_mahasiswa");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn === false) {
    foreach (sqlsrv_errors() as $error) {
        echo "SQLSTATE: " . $error['SQLSTATE'] . "<br>";
        echo "Code: " . $error['code'] . "<br>";
        echo "Message: " . $error['message'] . "<br>";
    }
    die("Koneksi gagal.");
} else {
    echo "Koneksi berhasil!";
}

?>