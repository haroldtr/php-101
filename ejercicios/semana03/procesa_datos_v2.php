<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Clase PHP: UCATECI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="../semana03/formulario_basico_v2.php">Operadores Aritmeticos</a></li>
        <li class="breadcrumb-item active" aria-current="page">Datos Capturados</li>
      </ol>
    </nav>
    <hr>
    <h1>Datos Capturados:</h1>
    <hr>
    <?php
    $pvalor = $_POST['pvalor'];
    $svalor = $_POST['svalor'];
    $resultado = $pvalor <= $svalor;
    // var_dump($resultado);
    ?>
    <ul>
      <li>
        El Resultado es : <?php echo (var_dump($resultado)); ?>
      </li>
    </ul>
    <hr>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>