<html>
<head>
    <title>Demostracion PHP</title>
</head>
<body>
<table border="1">
<?php
	
	$i = 1;

	echo "<tr><td> Prueba Tabla </td></tr>";

	for($i=1; $i <= 1000; $i++){

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