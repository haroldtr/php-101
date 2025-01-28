<?php
include_once("../php/header.php");
?>
<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Operadores Aritmeticos</li>
    </ol>
  </nav>
  <hr>
  <h1>Condicionales</h1>
  <hr>
  <h2>Verificar si un número es positivo, negativo o cero</h2>
  <form action="procesa_numero.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="numero" class="form-label">Ingresa un número:</label>
      <input type="number" class="form-control" id="numero" name="numero" required>
    </div>
    <button type="submit" class="btn btn-primary">Verificar</button>
  </form>

  <?php
  include_once("../php/footer.php");
  ?>