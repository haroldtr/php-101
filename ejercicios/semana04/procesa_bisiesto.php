<?php
include_once("../php/header.php");
?>
<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="./condicionalesv2.php">Condicionales V2</a></li>
      <li class="breadcrumb-item active" aria-current="page">Año Bisiesto</li>
    </ol>
  </nav>
  <hr>
  <h1>Condicionales</h1>
  <hr>
  <h2>Resultado</h2>
  <?php
  if (isset($_POST['anio'])) {
    $anio = $_POST['anio'];
    if (($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0)) {
      echo "<p class='alert alert-success'>El año $anio es bisiesto</p>";
    } else {
      echo "<p class='alert alert-success'> El año $anio no es bisiesto</p>";
    }
  } else {
    echo "Variable no definida";
  }
  ?>
  <?php
  include_once("../php/footer.php");
  ?>