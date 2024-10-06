<?php
function authMiddleware(){
    session_start();
    if(!isset($_SESSION['is_logging'])){
        header('Location: account.php');
        die();
    }
}

authMiddleware();
?>