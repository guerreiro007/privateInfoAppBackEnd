<?php

session_start();
if (session_status()== PHP_SESSION_ACTIVE && isset($_SESSION['user'])) {
    session_destroy();
}else {
    die("Acesso Negado");
}
header("location:index.php");
?>