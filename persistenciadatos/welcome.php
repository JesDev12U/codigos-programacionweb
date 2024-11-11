<?php
session_start();
if (!isset($_SESSION["loggedin"])) header("Location: /persistenciadatos");

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Bienvenido a mi sistema</h1>
  <button>Observar</button><br /><br />
  <form action="./logout.php">
    <button>Cerrar sesión</button>
  </form>
</body>

</html>