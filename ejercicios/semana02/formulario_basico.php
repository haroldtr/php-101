<?php
include_once("../php/header.php");
?>
<h1>Formulario Básico</h1>
<hr>
<form action="procesa_datos.php" method="post" enctype="multipart/form-data">
  <p>Nombre: <input type="text" name="nombre" id="nombre" required></p>
  <br>
  <p>Apellido: <input type="text" name="apellido" id="apellido" required></p>
  <br>
  <p>Salario RD$: <input type="number" name="salario" id="salario" min=0 required></p>
  <br>
  <p>Fecha Nacimiento: <input type="date" name="fecha_nacimiento" id="fecha_nacimiento"></p>
  <br>
  <p>Correo Electrónico: <input type="email" name="correo" id="correo" required></p>
  <br>
  <p><input type="submit"></p>
</form>
<?php
include_once("../php/footer.php");
?>