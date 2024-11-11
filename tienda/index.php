<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function getData($host, $usr, $passwd, $db, $table)
{
  $conn = new mysqli($host, $usr, $passwd, $db);
  if ($conn->connect_errno) {
    echo "Conexión fallida!: " . $conn->connect_error;
    die();
  }

  $query = $conn->query("SELECT * FROM " . $table);
  $data = array();
  while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
  }
  return $data;
}

$data = getData("localhost", "root", "Str0ngPassword!", "tienda", "productos");

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
</head>

<body>
  <h1>Productos</h1>
  <table id="table" class="table">
    <thead class="thead-dark">
      <th>ID</th>
      <th>Nombre</th>
      <th>Precio</th>
    </thead>
    <tbody>
      <?php foreach ($data as $row): ?>
        <tr>
          <td><?php echo $row['id'] ?></td>
          <td><?php echo $row['nombre'] ?></td>
          <td><?php echo $row['precio'] ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <script
    src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script>
    let table = new DataTable('#table');
  </script>
</body>

</html>