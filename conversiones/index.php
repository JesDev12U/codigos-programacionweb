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
      if ($_GET["conversion"] == "true") {
        //Conversion de binario a decimal
        //Verificamos entonces que el valor tenga un formato valido de un numero binario
        if (preg_match('/^[01]+$/', strval($_GET["valor"]))) {
          // Dividimos el valor binario en un array de caracteres
          $numeros = preg_split('//', $_GET["valor"], -1, PREG_SPLIT_NO_EMPTY);
          $res = 0;
          for ($i = 0; $i < count($numeros); $i++)
            $res += strval($numeros[$i] * pow(2, count($numeros) - $i - 1));

          echo $res;
        } else echo "<h1>El número ingresado no es binario</h1>";
      } else {
        if (preg_match('/^[{0-9}]+$/', strval($_GET["valor"]))) {
          //Conversion de decimal a binario
          //Hacemos la conversion
          $n = $_GET["valor"];
          $r = 0;
          $res = "";
          while ($n != 0) {
            $r = $n % 2;
            $n = floor($n / 2);
            $res = $r . $res;
          }
          echo $res;
        } else echo "<h1>El número ingresado no es un decimal</h1>";
      }
    }
    ?>
  </div>
</body>

</html>