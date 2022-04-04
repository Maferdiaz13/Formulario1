<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Crea una cuenta</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/estilo.css" media="screen" title="no title">
  </head>
  <body>

    <div class="contenedor">
      <h1>Crea una cuenta</h1>
        <div class="contenido">
          <form class="" action="respuesta.php" method="post">
            <div class="informacion">
                  <div class="campo">
                      <label for="nombre">Nombre(s)
                          <input type="text" name="nombre" id="nombre">
                      </label>
                  </div>
                  <div class="campo">
                      <label for="apellidopaterno">Apellido Paterno
                          <input type="text" name="apellidopaterno" id="apellidopaterno">
                      </label>
                  </div>
                  <div class="campo">
                      <label for="apellidomaterno">Apellido Materno
                          <input type="text" name="apellidomaterno" id="apellidomaterno">
                      </label>
                  </div>
                  <div class="campo">
                  <label for="correoelectronico">Correo electronico
                          <input type="text" name="correoelectronico" id="correoelectronico">
                      </label>
                  </div>
                  <div class="campo">
                      <label for="contraseña">Contraseña
                          <input type="text" name="contraseña" id="contraseña">
                      </label>
                  </div>
            </div> 
            
            <div class="form-date">               
                  <label class="form-date__label" for="input-date">Fecha de nacimiento</label>
                  <input class="form-date__input" type="date" id="input-date" name="input-date-start" value="2018–07–22">
                  </div>

                 
 <!-- **************************************sexo*******************************-->
                  <div class="sexo">
                  <h3>Sexo</h3>
                  <?php  $opciones = array(
                      'mas' => 'Masculino',
                      'fem' => 'Femenino'
                  );?>


                  <?php foreach($opciones as $key => $opcion) {
                    echo "<div class='campo'>";
                    echo "<input type='radio' name='opciones' value='$key' > $opcion";
                    echo "</div>";
                  } ?>
                 </div>
 <!-- ***************************************Especialización********************************-->
                  <div class="especializacion">
                    <h3>Seleccione un curso</h3>

                        <select name="area" value="-Any-">
                            <option>- Selecciona un curso -</option>
                            <option value="c1">HTML 1</option>
                            <option value="c2">HTML 2</option>
                            <option value="c3">HTML 3</option>
                        </select>
                  </div>
            <br>      
                    <input type="submit" value="Registrarse">
                 
            </div>
          </form>
        </div>
    </div>
  </body>
</html>