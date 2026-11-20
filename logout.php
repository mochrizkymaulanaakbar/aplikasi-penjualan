<?php
session_start();
// kosongkan semua data session
session_unset();
// Hancurkan session yang tersimpan di server
session_destory();

// Arahkan kembali pengguna ke halaman form login
header("Location: login.php");
exit;
?>