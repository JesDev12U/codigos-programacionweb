<?php
$usr = $_POST["usr"];
$pass = $_POST["pass"];

if ($usr == "admin" && $pass == "1234") {
  echo "<h1>Bienvenido!!</h1>";
} else {
  echo "<h1>Usuario no válido</h1>";
}
