<?php
include('db.php');

$result = $conn->query("SELECT * FROM visitas");
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Listado de Visitas</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <h1>Listado de Visitas</h1>
  <a href="index.php">← Volver al formulario</a><br><br>

  <table border="1" cellpadding="8">
    <tr>
      <th>ID</th>
      <th>Teléfono</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Correo</th>
      <th>Fecha</th>
    </tr>

    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= $row['telefono'] ?></td>
      <td><?= $row['nombre'] ?></td>
      <td><?= $row['apellido'] ?></td>
      <td><?= $row['correo'] ?></td>
      <td><?= $row['fecha_resgistro'] ?></td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>


