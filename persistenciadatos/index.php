<?php
session_start();
$user = "root";
$password = "123";
$case = 0;
//Checamos si ya inicio sesion con la sesion
if (isset($_SESSION["loggedin"])) header("Location: welcome.php");
//Si no, puede ser que se hayan quedado las credenciales en las cookies
else if ($_COOKIE['user'] === $user && $_COOKIE['password'] === $password) {
  $_SESSION['loggedin'] = true; //Establecemos que el usuario ya tiene las credenciales
  header("Location: welcome.php");
}

//case 1 para inicio de sesion correcto -> welcome.php
//case 2 para variables detectadas pero credenciales invalidas -> error.php
//case 3 para variables no detectadas -> login.html
if (isset($_REQUEST["user"])) {
  if ($_REQUEST["user"] === $user && $_REQUEST["password"] === $password) {
    $case = 1; //welcome.html
    $_SESSION["loggedin"] = true;

    if ($_POST["remember"]) {
      setcookie('user', $_REQUEST["user"], time() + (86400 * 30), "/");
      setcookie('password', $password, time() + (86400 * 30), "/");
    }
  } else $case = 2; //error.php
} else $case = 3; //login.html
?>

<html>

<head>
  <title>Paginita</title>
</head>

<body>
  <?php
  switch ($case) {
    case 1: {
        header("Location: welcome.php");
        break;
      }
    case 2: {
        header("Location: error.php");
        break;
      }
    case 3: {
        include("login.html");
        break;
      }
  }
  ?>
</body>

</html>