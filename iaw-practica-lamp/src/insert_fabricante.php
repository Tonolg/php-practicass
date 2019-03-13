<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Add Data</title>
</head>

<body>

<?php
// including the database connection file
include_once("config.php");
$nombre_fabricante=$_POST['nombre_fabricante'];

if(empty($nombre_fabricante) == 1){
	echo "variable vacia";
}


$query = "INSERT INTO fabricante (nombre) values (?)";
$statment = mysqli_prepare($mysqli, $query);
mysqli_stmt_bind_param($statment, "s", $nombre_fabricante);
mysqli_stmt_execute($statment);
mysqli_stmt_close($statment);
mysqli_close($mysqli);

?>

</body>
</html>