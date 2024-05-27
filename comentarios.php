<!DOCTYPE html>
<html>
<body>

<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="opiniones";

//crear coneccion
$conn=mysqli_connect($server_name,$username,$password,$database_name);

if (!$conn)
{
		die("coneccion fallida:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
	$sugerencia = $_POST['sugerencia'];
	
	
	$sql_query = "INSERT INTO correspondencia (nombre, apellido, telefono, correo, sugerencia)
	VALUES ('$nombre','$apellido','$telefono','$correo', '$sugerencia')";
	
	if (mysqli_query($conn, $sql_query))
	{	
		echo "Datos insertados con exito";
	}
	else
	{
		echo "Error: ". $sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>
			
</body>

	<br>
 	<a style="background-color: black" href="inicio.html" class="btn"><font color="#ffffff">Volver Al Inicio</a>
</html>