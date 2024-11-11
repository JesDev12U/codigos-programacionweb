<?php
session_start();
if (isset($_SESSION["loggedin"])) header("Location: /persistenciadatos/welcome.php");
?>

<h1>ERROR</h1>
<p>Credenciales incorrectas</p>
<a href="/persistenciadatos">Intentar de nuevo</a>