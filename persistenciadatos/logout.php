<?php
session_start();
session_unset();
session_destroy();
setcookie('user', '', time() - 60, "/");
setcookie('password', '', time() - 60, "/");
header("Location: /persistenciadatos");
