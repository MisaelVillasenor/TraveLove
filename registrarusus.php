 <?php
	include('claseconexion.php');	

	$nombre = $_POST['txtNombre'];
	$apellidop = $_POST['txtApellidoP'];
	$apellidom = $_POST['txtApellidoM'];
	$correo = $_POST['txtCorreo'];
	$password = $_POST['txtPassword'];
	$edad = $_POST['txtEdad'];
	$telefono = $_POST['txtTelefono'];
 	$tipo = $_POST['txtTipo'];


	$sql = "INSERT INTO usuarios (nombre, apellido_p, apellido_m, correo, contrasenia, edad ,telefono,tipo ) VALUES ('$nombre','$apellidop','$apellidom','$correo','$password','$edad','$telefono', 'usuario')"; 

	$resultado =mysqli_query($mysqli, $sql) or die("Hubo un error al Insertar este Usuario. " + $sql);

	header("Location: usuarios.php");


?>