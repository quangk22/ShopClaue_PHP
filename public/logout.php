<?php 
session_start();
unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['cart']);
header('Location: account.php');
?>