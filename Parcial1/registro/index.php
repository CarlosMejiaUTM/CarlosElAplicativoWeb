<!DOCTYPE html>
<html>
<head>
  <title>Registro</title>
</head>
<body>
  <h1>Registro</h1>
  
  <form>
    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" required><br><br>
    
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>
    
    <label for="fecha_nacimiento">Fecha de nacimiento:</label>
    <select id="dia" name="dia" required>
      <option value="">Día</option>
      <!-- Opciones para los días -->
      <?php
      for ($i = 1; $i <= 31; $i++) {
        echo "<option value='$i'>$i</option>";
      }
      ?>
    </select>
    <select id="mes" name="mes" required>
      <option value="">Mes</option>
      <option value="1">Enero</option>
      <option value="2">Febrero</option>
      <option value="3">Marzo</option>
      <option value="4">Abril</option>
      <option value="5">Mayo</option>
      <option value="6">Junio</option>
      <option value="7">Julio</option>
      <option value="8">Agosto</option>
      <option value="9">Septiembre</option>
      <option value="10">Octubre</option>
      <option value="11">Noviembre</option>
      <option value="12">Diciembre</option>
    </select>
    <select id="anio" name="anio" required>
      <option value="">Año</option>
      <!-- Opciones para los años -->
      <?php
      $anioActual = date("Y");
      for ($i = $anioActual; $i >= $anioActual - 100; $i--) {
        echo "<option value='$i'>$i</option>";
      }
      ?>
    </select><br><br>
    
    <label for="ciudad_nacimiento">Ciudad de nacimiento:</label>
    <input type="text" id="ciudad_nacimiento" name="ciudad_nacimiento" required><br><br>
    
    <label for="pais_nacimiento">País de nacimiento:</label>
    <select id="pais_nacimiento" name="pais_nacimiento" required>
      <option value="">Selecciona un país</option>
      <option value="Mexico">México</option>
      <option value="Espana">España</option>
      <option value="EUA">Estados Unidos</option>
      <option value="Venezuela">Venezuela</option>
      <option value="Egipto">Egipto</option>
    </select><br><br>
    
    <label for="nacionalidad">Nacionalidad:</label>
    <select id="nacionalidad" name="nacionalidad" required>
      <option value="">Selecciona una nacionalidad</option>
      <option value="Mexicano">Mexicano/a</option>
      <option value="Español">Español/a</option>
      <option value="Estadounidense">Estadounidense</option>
      <option value="Venezol
