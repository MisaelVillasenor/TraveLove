 <?php
	include('claseconexion.php');	

	$nombre = $_POST['txtNombre'];
	$apellidop = $_POST['txtapellidopat'];
	$apellidom = $_POST['txtapellidomat'];
	$correo = $_POST['txtcorreo'];
	$password = $_POST['txtpass'];
	$fecha = $_POST['txtedad'];
	$genero = $_POST['genero'];
	$tel = $_POST['txttel'];



	$sql = "INSERT INTO usuarios (nombre, apellido_p, apellido_m, correo, contrasenia, fecha_nac, genero, telefono, tipo) VALUES ('$nombre','$apellidop','$apellidom','$correo','$password','$fecha','$genero','$tel','usuario')"; 

	$resultado =mysqli_query($mysqli, $sql) or die("Hubo un error al Insertar este Usuario. " + $sql);

	header("Location: 1login.html");

?>