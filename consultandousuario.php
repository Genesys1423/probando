<?php
include ('sql/conexionBoostrap.php');
			
	$sqlConsulta= "select * from usuario";
	$aplicarConsulta= $mysqli->query($sqlConsulta);
			
	echo "<br><br>
			<div class='container'>
				<table class='table table-info'>
					<tr>
						<th>Número usuario</th>
						<th>Nombre de usuario</th>
						<th>Password</th>
						<th>Edad</th>
					</tr>					
					
					";		
			
			
				
	while($row=mysqli_fetch_array($aplicarConsulta))
	{
		echo "<tr><td>".$row[0]."</td>";
		echo "<td>".utf8_encode($row[1])."</td>";
		echo "<td>".utf8_encode($row[2])."</td>";
		echo "<td>".$row[3]."</td></tr>";
	}	
		
	echo "		</table>
			</div>";	
		
		
		
?>

