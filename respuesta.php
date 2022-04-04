<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link href="" rel="stylesheet">

    <link rel="stylesheet" href="css/estilo.css" media="screen" title="no title">
  </head>
  <body>

    <div class="contenedor">
      <h1>Crea una cuenta</h1>
      <?php $resultado = $_POST;?>
      <?php $nombre = $resultado['nombre']; ?>
      <?php $apellidopaterno = $resultado['apellidopaterno']; ?>
      <?php $apellidomaterno = $resultado['apellidomaterno']; ?>
      <?php $correoelectronico = $resultado['correoelectronico']; ?>
      <?php $contraseña = $resultado['contraseña']; ?>
        
      <?php 
          if(! (filter_has_var(INPUT_POST, 'nombre') && 
          (strlen(filter_input(INPUT_POST,'nombre')) > 0))) {
      echo "El nombre es obligatorio";
    } else {    ?>
        <p>Nombre: <?php echo $nombre; ?></p>
    <?php } ?>
      
    
          <?php if(!isset($apellidopaterno) || trim($apellidopaterno) != '') { ?>
            <p>Apellido paterno: <?php echo $apellidopaterno; ?></p>
          <?php } else {
            echo "El apellido es obligatorio";
            }  ?>

          <?php if(!isset($apellidomaterno) || trim($apellidomaterno) != '') { ?>
            <p>Apellido materno: <?php echo $apellidopaterno; ?></p>
          <?php } else {
            echo "El apellido es obligatorio";
            }  ?>
      
          <?php if(!isset($correoelectronico) || trim($correoelectronico) != '') { ?>
                <p>Correo electronico: <?php echo $correoelectronico; ?></p>
              <?php } else {
                echo "El correo electronico es obligatorio";
          }  ?>

        <?php if(!isset($contraseña) || trim($contraseña) != '') { ?>
                    <p>Contraseña: <?php echo $contraseña; ?></p>
                  <?php } else {
                    echo "El apellido es obligatorio";
              }  ?>
      <hr>


       <?php //validar Select ?>
       <?php if(isset($_POST['area'])) {
         $area = $_POST['area'];
         echo "<h3>Su curso seleccionado es:</h3>";
         switch ($area) {
           case 'c1':
                echo "HTML 1";
                break;
           case 'c2':
                echo "HTML 2";
                break;
           case 'c3':
                echo "HTML 3";
                break;
           default:
                echo "Por favor elige un curso";
                break;
         }
       }?>
       <hr>
 
       <?php // validar radio buttons ?>
       <?php  $opciones = array(
           'mas' => 'Masculino',
           'fem' => 'Femenino'
       );?>
       
       <h3>Sexo:</h3>
       <?php if(array_key_exists($_POST['opciones'], $opciones)) {
         $sexo = $_POST['opciones'];
         switch ($sexo) {
           case 'mas':
               echo "Masculino";
               break;
           case 'fem':
              echo "Femenino";
              break;
         }
       } else {
             echo "No elegiste tu sexo";
       } ?>
       
       <hr>   
    </div>
  </body>
</html>
