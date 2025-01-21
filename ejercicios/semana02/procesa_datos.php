<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clase PHP: UCATECI</title>
</head>

<body>
  <h1>Datos Capturados:</h1>
  <hr>
  <?php
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $salario = $_POST['salario'];
  $fecha_nacimiento = $_POST['fecha_nacimiento'];
  $correo = $_POST['correo'];
  ?>
  <ul>
    <li>
      Nombre : <?php echo ($nombre); ?>
    </li>
    <li>
      Apellido : <?php echo ($apellido); ?>
    </li>
    <li>
      Salario : <?php echo ($salario); ?>
    </li>
    <li>
      Fecha Nacimiento : <?php echo ($fecha_nacimiento); ?>
    </li>
    <li>
      Correo electrónico : <?php echo ($correo); ?>
    </li>
  </ul>
  <hr>
  <a href="../semana02/formulario_basico.php">Atrás</a>
</body>

</html>