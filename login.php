<?php

$error_message = "";
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // validasi sederhana: pastikan tidak ada field yang kosong
    if (empty($username) || empty($password)) {
        $error = 'Username dan password wajib diisi';
        // verifikasi data (sementara hardcode, nanti bisa diganti cek ke database)
    } elseif ($username == 'admin' && $password == 'pixel2026') {
        $_SESSION['is_login'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'admin';
        echo "Login berhasil!";
         header('Location: dashboard_utama.php');
        exit();
    } else {
       $_SESSION['error_message'] = "ERROR: Username atau Password salah!";
       echo($_SESSION['error_message']);
        header("Location: form_login.php");
        exit();
    }
}
?>