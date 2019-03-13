<?php
// including the database connection file
include_once("config.php");

// fetching data in descending order (lastest entry first)

$query = "SELECT producto.codigo AS codigo_producto, " .
            "producto.nombre AS nombre_producto, " .
            "producto.precio, producto.codigo_fabricante, " .
			"fabricante.nombre AS nombre_fabricante, " .
			"producto.imagen " .
            "FROM producto INNER JOIN fabricante ON producto.codigo_fabricante=fabricante.codigo";
$result = mysqli_query($mysqli, $query); 


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Homepage</title>
</head>

<body>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>codigo</td>
		<td>name</td>
        <td>precio</td>
        <td>codigo fabricante</td>
		<td>imagen</td>
	
		
	</tr>

	<?php
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>\n";
		echo "<td><img src=\"".$res["imagen"]."\" width='100' heigth='100'></td>\n";
		echo "<td>".$res['codigo_producto']."</td>\n";
        echo "<td>".$res['nombre_producto']."</td>\n";
        echo "<td>".$res['precio']."</td>\n";
        echo "<td>".$res['codigo_fabricante']."</td>\n";
		echo "<td>".$res['nombre_fabricante']."</td>\n";
		echo "</tr>\n";
	}

	mysqli_close($msqli);
	?>
	</table>
</body>
</html>
