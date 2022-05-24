<?php
include('claseconexion.php');	

$conexion=mysqli_connect($host,$username,$password,$db_name) or
	die("Problemas con la conexión");




	$clave=$_POST['id'];
	$registros=mysqli_query($conexion,"select id_user from usuarios where id_user=$clave") or die("Problemas en el select:".mysqli_error($conexion));
	if ($reg=mysqli_fetch_array($registros))
	{
		mysqli_query($conexion,"delete from usuarios where id_user=$clave")
			or die("Problemas en el select:".mysqli_error($conexion));


		echo"<script> alert('Se elimino'); window.location='usuarios.php'; </script>";

	}
	else{
		echo"<script> alert('No se encontro ninguna clave'); window.location='formeliminarusus.html'; </script>";
	}
	mysqli_close($conexion);
	?>