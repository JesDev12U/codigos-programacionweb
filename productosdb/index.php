<?php
// Función para obtener datos de la base de datos
function obtenTodosRegistros($host, $base, $usr, $password, $tabla)
{
  // Crear la conexión
  $cnx = new mysqli($host, $usr, $password, $base);

  // Verificar la conexión
  if ($cnx->connect_error) {
    die("Conexión fallida: " . $cnx->connect_error);
  }

  // Recupera registros de la base de datos
  $res = mysqli_query($cnx, "SELECT * FROM " . $tabla);
  $datos = array();
  while ($registro = mysqli_fetch_assoc($res)) {
    $datos[] = $registro;
  }

  // Libera objetos de datos empleados
  mysqli_free_result($res);
  mysqli_close($cnx);

  return $datos;
}

// Obtener los datos
$datos = obtenTodosRegistros("localhost", "tienda", "root", "Str0ngPassword!", "producto");
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Mostrar Tabla</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
</head>

<body>
  <div class="container">
    <h2>Datos de la Tabla</h2>
    <table id="tabla" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Precio</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($datos as $fila): ?>
          <tr>
            <td><?php echo $fila['producto']; ?></td>
            <td><?php echo $fila['nombre']; ?></td>
            <td><?php echo $fila['precio']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <script
    src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script>
    let table = new DataTable('#tabla');
  </script>
</body>

</html>