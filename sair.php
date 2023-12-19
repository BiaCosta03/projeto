<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['matrícula']);
    header("Location: login.php");
?>
