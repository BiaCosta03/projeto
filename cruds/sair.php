<?php
  session_start();
  unset($_SESSION['clogin']);
  unset($_SESSION['csenha']);
  header('location:login.php');

?>