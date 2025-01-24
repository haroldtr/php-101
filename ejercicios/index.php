<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Clase PHP: UCATECI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Clase PHP: UCATECI </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Clases
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Semana 01</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Semana 02</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Semana 03</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Home</li>
      </ol>
    </nav>
    <hr>
    <h1>Clase PHP: UCATECI</h1>
    <hr>
    <h3>Clase PHP: Semana 01</h3>
    <ul class="list-group">
      <li class="list-group-item">
        <a href="semana01/ejemplo01.php">Practicas Semana 01 - Ejemplo 01</a>
      </li>
      <li class="list-group-item">
        <a href="semana01/ejemplo02.php">Practicas Semana 01 - Ejemplo 02</a>
      </li>
    </ul>
    <h3>Clase PHP: Semana 02</h3>
    <ul class="list-group">
      <li class="list-group-item">
        <a href="semana02/formulario_basico.php">Practicas Semana 02 - Formulario Básico</a>
      </li>
      <li class="list-group-item">
        <a href="#">Practicas Semana 02 - Ejemplo 02</a>
      </li>
    </ul>
    <h3>Clase PHP: Semana 03</h3>
    <ul class="list-group">
      <li class="list-group-item">
        <a href="semana03/formulario_basico.php">Practicas Semana 03 - Operadores Aritmeticos</a>
      </li>
      <li class="list-group-item">
        <a href="semana03/formulario_basico_v2.php">Practicas Semana 03 - Operadores de Comparación</a>
      </li>
    </ul>
    <hr>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>