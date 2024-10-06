<?php
// Bắt đầu session
session_start();

// Hủy tất cả các biến session
$_SESSION = [];

// Hủy session
session_destroy();

echo "Session destroyed.";

header('Location: account.php')
?>