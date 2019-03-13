<?php
session_start();
include_once("config.php");
$email=$_POST["email"];
$password=$_POST["password"];
if (empty($email) == 1 || empty($password) == 1){
    header('Location: login.php');
    exit;
}
$query= "select count(*) " .
            "from users " .
            "where email = ? and password = ?";      
$statment = mysqli_prepare($mysqli, $query);
mysqli_stmt_bind_param($statment, "ss", $email, md5($password));
mysqli_stmt_execute($statment);
$resultado = mysqli_stmt_get_result($statment);
if ($resultado->num_rows == 1){
    $_SESSION['logincorrecto'] = 1;
    header('Location: sesion.php');
}else {
    header('Location: login.php');
    echo "datos erroneos";
}
mysqli_stmt_close($statment);
mysqli_close($mysqli);
?>