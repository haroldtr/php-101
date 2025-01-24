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
  $pvalor = $_POST['pvalor'];
  $svalor = $_POST['svalor'];
  $resultado = $pvalor / $svalor;
  ?>
  <ul>
    <li>
      El Resultado es : <?php echo ($resultado); ?>
    </li>
  </ul>
  <hr>
  <a href="../semana03/formulario_basico.php">Atrás</a>
</body>

</html>