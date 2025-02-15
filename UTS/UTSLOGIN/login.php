<?php
session_start();
$response = ["message" => "", "status" => "error"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek username dan password (hardcoded)
    if ($username == "admin" && $password == "password") {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $response['message'] = "Login Berhasil!";
        $response['status'] = "success";
    } else {
        $response['message'] = "Username atau Password Anda salah!";
    }
    echo json_encode($response);
    exit;
}
