<html>
<head>
    <title>Demostracion PHP</title>
</head>
<body>
<table border="1">

<?php	

	// Numero de celdas recogido desde el formulario
	$cantidad = $_POST["numero"];

	echo "<tr><td> Tabla </td></tr>";

	for($i=1; $i <= $cantidad; $i++){

		// Si el numero es multiplo de 10 saltara de linea
		if($i % 10 == 0){
			
			echo "<td><font color='blue'>";
			echo $i;
			echo "</font></td>";
			echo "<tr>";
			echo "</tr>";
			
		} else {
			
			echo "<td>";
			echo $i;
			echo "</td>";
		}

	};
	
?>
</table>
</body>
</html>