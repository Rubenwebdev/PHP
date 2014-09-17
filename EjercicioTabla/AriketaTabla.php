<html>
<head>
    <title>Demostracion PHP</title>
</head>
<body>
<table border="2">

<?php	

	// Numero de celdas recogido desde el formulario y comprueba que sea un numero de lo contrario saltara un error
	$cantidad = "";

	if(is_numeric($_POST["numero"]) && $_POST["numero"] > 0){
		$cantidad = $_POST["numero"];
	}else{
		echo "Debe insertar un numero mayor de 0";
		$cantidad = 0;
	}
	

	echo "<tr><td colspan = 10> Tabla </td></tr>";

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