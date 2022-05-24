 <?php
	include('claseconexion.php');	
    $id = $_POST['txtid'];
	$nombre = $_POST['txtNombre'];
	$apellidop = $_POST['txtapellidopat'];
	$apellidom = $_POST['txtapellidomat'];
	$correo = $_POST['txtcorreo'];
	$password = $_POST['txtpass'];
	$fecha = $_POST['txtedad'];
	$genero = $_POST['genero'];
	$tel = $_POST['txttel'];
	$tipo = $_POST['txttipo'];


	$consulta = "UPDATE usuarios SET nombre = '$nombre', apellido_p = '$apellidop',apellido_m = '$apellidom', genero = '$genero', correo= '$correo', contrasenia='$password', fecha_nac = '$fecha', telefono = '$tel', tipo='$tipo'  WHERE  id_user = '$id' "; 

	$resultado =mysqli_query($mysqli, $consulta) or die("Hubo un error al modificar este Usuario. " + $consulta);

	header("Location: usuarios.php");


?>