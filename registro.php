<?php
include('claseconexion.php');  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shorcut icon" type="image/x-icon" href="img/logotra.png" >
</head>
<body>
    <section class="login-form">
        <form action="login.php" method="POST">
            <div class="img">
                <img src="img/logotra.png" alt="Logo travelove" >
            </div> 
            <div class="box">
                <div class="heading">
                    <h2></h2>
                </div>
                <div class="form-fields">
                    <div class="input-box">
                        <input type="text" placeholder="Nombre" class="form-control"   id="txtNombre" name="txtNombre">
                        <span><img src="img/icono nombre.png" alt=""></span>
                    </div>

                    <div class="input-box">
                        <input type="text" placeholder="Apellido Paterno" class="form-control" 
                        id="txtapellidopat" name="txtapellidopat">
                        <span><img src="img/icono nombre.png" alt=""></span>

                    </div>

                    <div class="input-box">
                        <input type="text" placeholder="Apellido Materno" class="form-control"
                         id="txtapellidomat" name="txtapellidomat">
                        <span><img src="img/icono nombre.png" alt=""></span>
                    </div>

                    <div class="input-box">
                        <input type="text" placeholder="CORREO ELECTRONICO " class="form-control1"  id="txtcorreo" name="txtcorreo">
                        <span><img src="img/iconocorreo.png" alt=""></span>
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Contraseña" class="form-control1"  id="txtpass" name="txtpass">
                        <span><img src="img/iconocandado.png" alt=""></span>
                    </div>
                   <div class="input-box">
                        <input type="number" placeholder="Edad" class="form-control1 "
                         id="txtedad" name="txtedad" min="18" max="100">
                        <span><img src="img/iconoedad.png" alt=""></span>
                    </div>
                    <div>
                         <select name="genero"  class="genero" size="1" placeholder="Selecciona tu genero"  id="genero" name="genero">>
                       <option></option>
                                        <?php  
 

                             $query = $mysqli -> query ("SELECT * FROM generos ");
                    
                          while ($valores = mysqli_fetch_array($query)) {
                        
                   echo '<option value="'.$valores[idgen].'">'.$valores[nombre].'</option>';
                                 }

                               ?>
                    </select>
                                        
                            </div>            
                    
                  <div class="input-box">
                        <input type="text" placeholder="Telefono" class="form-control1"
                         id="txttel" name="txttel">
                        <span><img src="img/iconotelefono.png" alt=""></span>
                    </div>

                    <div class="button-box1">
                        
                        <button>Registro</button>
                        
                        
                    </div>


                    
                        
                
                </div>
        </form>
    </section>

    
</body>
</html>