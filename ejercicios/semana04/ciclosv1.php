<?php
include_once("../php/header.php");
?>
<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Ciclos V1</li>
    </ol>
  </nav>
  <hr>
  <h1>Ciclos Repetitivos</h1>
  <hr>
  <h2>Generar una tabla dinamina</h2>
  <form action="procesa_tabla.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="filas" class="form-label">Ingresa un número:</label>
      <input type="number" class="form-control" id="filas" name="filas" required>
    </div>
    <button type="submit" class="btn btn-primary">Verificar</button>
  </form>

  <?php
  include_once("../php/footer.php");
  ?>