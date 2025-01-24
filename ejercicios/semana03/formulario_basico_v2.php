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
        <li class="breadcrumb-item active" aria-current="page">Operadores Aritmeticos</li>
      </ol>
    </nav>
    <hr>
    <h1>Operadores Aritmeticos</h1>
    <hr>
    <form action="procesa_datos_v2.php" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="pvalor" class="form-label">Primer Valor:</label>
        <input type="number" class="form-control" id="pvalor" name="pvalor" required>
      </div>

      <div class="mb-3">
        <label for="svalor" class="form-label">Segundo Valor:</label>
        <input type="number" class="form-control" id="svalor" name="svalor" required>
      </div>
      <br>
      <!-- <p><input type="submit"></p> -->
      <!-- <a class="btn btn-success" role="button" aria-disabled="true" type="submit">Ejecutar proceso</a> -->
      <button type="submit" class="btn btn-success">Ejecutar proceso</button>
      <button type="reset" class="btn btn-danger">Limpiar Pantalla</button>

    </form>
    <hr>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>