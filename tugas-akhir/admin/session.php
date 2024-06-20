<?php
// Periksa apakah pengguna telah login
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    // Jika belum login, redirect ke halaman login
    header('Location: login.php');
    exit;
}
?>