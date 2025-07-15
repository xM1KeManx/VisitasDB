<?php include('db.php') ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro de Visitas</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <h1>Formulario de Registro de Visitas</h1>
  <form action="guardar.php" method="POST">
    <label>Teléfono:</label><br>
    <input type="text" name="telefono" required><br>

    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br>

    <label>Apellido:</label><br>
    <input type="text" name="apellido" required><br>

    <label>Correo Electrónico:</label><br>
    <input type="email" name="correo" required><br><br>

    <button type="submit">Agregar Visita</button>
  </form>

  <a href="listar.php">Ver Visitas Registradas</a>
</body>
</html>