<?php
session_start();
$_SESSION['loginincorrecto'] = 0;
header('Location: login.php');
exit;
?>