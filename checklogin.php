<?php
	include('claseconexion.php');	

$correo = $_POST['txtEMail'];
$password = $_POST['txtpass'];

$sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasenia = '$password'"; 
$result = $mysqli->query($sql);
if ($f=$result->fetch_object()){
	$nombre = $f->nombre;
	$tipo = $f->tipo;
	
	echo "Nombre: " . $nombre;
	echo "Tipo: " . $tipo;

	session_start();
	$_SESSION["usuario"] = $f->nombre;     
	$_SESSION["tipo"] = $f->tipo;     
	
	//Aqui ya lo encontraste, ahora a ver si es admin para llevarlo a la pagina correspondiente...
	if($f->tipo == "admin") header("Location: admi.html");
	if($f->tipo == "usuario") header("Location: index.php");
	if($f->tipo == null) header("Location: index.php");

} else {
	echo '<script language="javascript">alert("Usuario o contraseña incorrectos econcontrado");window.location.href="1login.html"</script>';
}

?>