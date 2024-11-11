<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nota de tu compra</title>
</head>

<body>
  <h1>Nota de tu compra</h1>
  <table>
    <thead>
      <th>Producto</th>
      <th>Precio unitario</th>
      <th>Cantidad</th>
      <th>Subtotal</th>
    </thead>
    <tbody>
      <?php
      if (!isset($_POST)) die();

      $productos = [];
      $cantidades = [];
      $totales = [];

      for ($i = 1; $i <= 6; $i++) {
        $productos[] = $_POST["producto$i"];
        $cantidades[] = $_POST["cantidad$i"];
        $totales[] = $_POST["total$i"];
      }

      $totalCompra = 0;
      for ($i = 0; $i < 6; $i++) {
        echo "<tr>";
        echo "<td>" . $productos[$i] . "</td>";
        echo "<td>" . $totales[$i] / $cantidades[$i] . "</td>";
        echo "<td>" . $cantidades[$i] . "</td>";
        echo "<td>" . $totales[$i] . "</td>";
        echo "</tr>";
        $totalCompra += $totales[$i];
      }
      printf("<tr><td colspan=\"4\"><b>TOTAL: $%.2f</b></td></tr>", $totalCompra);
      ?>
    </tbody>
  </table>
</body>

</html>