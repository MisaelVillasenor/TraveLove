<?php
include('claseconexion.php');
 $id= $_POST['id'];
$consulta= ConsultarUsuario($_POST['id'], $mysqli);
 function ConsultarUsuario($id_as, $mysqli){


$sentencia = "SELECT * FROM usuarios WHERE id_user='".$id_as."' ";
    $resultado = $mysqli->query($sentencia);
    $fila = $resultado->fetch_object();
return[
	$fila->nombre,
	$fila->apellido_p,
    $fila->apellido_m,
    $fila->genero,
	$fila->correo,
	$fila->contrasenia,
    $fila->fecha_nac,
	$fila->telefono,
    $fila->tipo,
];
 	}


	?>
	<!DOCTYPE html>
<html>
<head>
    <title>Modificar</title>

    <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="css/core-style.css">
</head>
<body>
    <center>
        <div  class="col-8">
<div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Modificar</font></font></h2>
                            </div>

                            <form action="actualizarusus.php" method="post">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="txtNombre" value="<?php echo $consulta[0] ?>" placeholder="Nombre" name="txtNombre">
                                        
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="txtapellidopat" value="<?php echo $consulta[1] ?>" placeholder="Apellido Paterno" name="txtapellidopat">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="txtapellidomat" value="<?php echo $consulta[2] ?>" placeholder="Apellido Materno" name="txtapellidomat">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        

<select name="genero"id="genero" value="<?php echo $consulta[3] ?>">
                                        <option></option>
                                        <?php  
 

                             $query = $mysqli -> query ("SELECT * FROM generos ");
                    
                          while ($valores = mysqli_fetch_array($query)) {
                        
                   echo '<option value="'.$valores[idgen].'">'.$valores[nombre].'</option>';
                                 }

                               ?>
                                    </select></div> <div class="col-12 mb-3">
                              
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" id="txtcorreo" placeholder="Correo" value="<?php echo $consulta[4] ?>" name="txtcorreo">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" id="txtpass" placeholder="Password" name="txtpass" value="<?php echo $consulta[5] ?>">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control mb-3" id="txtedad" placeholder="Edad" name="txtedad" value="<?php echo $consulta[6] ?>">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" id="txttel" placeholder="txttel" name="txttel" value="<?php echo $consulta[7] ?>">
                                    </div>
                                     <div class="col-12 mb-3">
                                        <input type="text" class="form-control" id="txttipo" placeholder="Tipo: admin o usuario" name="txttipo" value="<?php echo $consulta[8] ?>">

                                        <input type="text" class="form-control" id="txtid" value="<?php echo $id ?>" placeholder="id" name="txtid"  HIDDEN>
                                    </div>
                                        </div>
                                    </div>

                                </div>
                                <button class="btn_sign_up" >Modificar </button>
                            </form>
                        </div>
                    </div>
                
    </center>
</body>
</html>


