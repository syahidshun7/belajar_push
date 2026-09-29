<?php
session_start();
$_SESSION = array(); // kosongkan semua data session
session_unset(); // hapus variabel session
session_destroy(); // hancurkan session di server
header('Location: form_login.php');
exit();
?>