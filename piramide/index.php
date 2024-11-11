<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Piramide</title>
</head>

<body>
  <form method="GET">
    <label>Altura de la pirámide</label>
    <input type="number" name="k" />
    <input type="submit" value="Ver pirámide" />
  </form>
  <div>
    <?php
    if (isset($_GET["k"])) {
      $k = $_GET["k"];

      for ($i = 0; $i < $k; $i++) {
        $str = "";
        for ($j = 0; $j <= $i; $j++)
          $str = $str . "*";

        echo "<span style=\"display: block;\">" . $str . "</span>";
      }
    }
    ?>
  </div>
</body>

</html>