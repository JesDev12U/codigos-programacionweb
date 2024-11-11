<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversiones</title>
</head>

<body>
  <form method="GET">
    <label for="valor">Valor</label><br>
    <input type="number" name="valor" /><br>
    <input type="radio" name="conversion" value="true" checked />
    <label for="conversion">Binario a decimal</label>
    <input type="radio" name="conversion" value="false" />
    <label for="conversion">Decimal a binario</label><br>
    <input type="submit" value="Convertir">
  </form>
  <div>
    <?php
    if (isset($_GET["valor"]) && isset($_GET["conversion"])) {
      if ($_GET["conversion"] === "true") {
        //Binario a decimal
        if (preg_match('/^[01]+$/', strval($_GET["valor"])))
          //Cumple con el RegExp, entonces hacemos la conversion
          echo "<p>" . bindec($_GET["valor"]) . "</p>";
        else echo "<h1>El número ingresado no es binario!</h1>";
      } else {
        //Decimal a binario
        if (preg_match('/^[{0-9}]+$/', strval($_GET["valor"])))
          echo "<p>" . decbin($_GET["valor"]) . "</p>";
        else echo "<h1>El número ingresado no es decimal!</h1>";
      }
    }
    ?>
  </div>
</body>

</html>