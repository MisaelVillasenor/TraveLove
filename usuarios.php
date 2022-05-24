
 <?php
	include('claseconexion.php');	
	echo " <link rel= stylesheet href= css2/tabla.css>  ";
	echo " <link rel= stylesheet href= css2/core-style.css>  ";

echo" <center> <p><h3> Lista Usuarios </h3> </center>";
 


 echo "<div class=datagrid> <TABLE >  
<tr>
<th>Id</th>
<th>Nombre</th>
<th>Apellido_Paterno</th>
<th>Apellido_Materno</th>
<th>Correo</th>
<th>Contraseña</th>
<th>Edad</th>
<th>Telefono</th>
<th>tipo</th>



</tr>";

	$sql="SELECT * from usuarios order by id_user";
		$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){

    echo "<tr>"; 
    
    "<td>"  <?php echo $mostrar['id_user'] ?> "</td>"; 
    "<td>" <?php echo $mostrar['nombre'] ?> "</td>"; 
    "<td>" echo $mostrar['apellido_p'] "</td>"; 
    "<td>" echo $mostrar['apellido_m'] "</td>"; 
 
    "<td>" echo $mostrar['correo'] "</td>"; 
    "<td>" echo $mostrar['contrasenia'] "</td>"; 
    "<td>" echo $mostrar['edad'] ."</td>"; 
    "<td>" echo $mostrar['telefono'] "</td>"; 
    "<td>" echo $mostrar['tipo'] "</td>"; 
  echo "</tr>";
    
}
echo "</TABLE> </div>";

?>
<a href="formagregarus.html" class="btn amado-btn mb-15">Agregar</a>
<a href="formeliminarusus.html" class="btn amado-btn mb-15">Eliminar</a>
<a href="formmodificarusus.html" class="btn amado-btn mb-15">Modificar</a>
<a href="admi.html" class="btn amado-btn mb-15">Inicio</a>