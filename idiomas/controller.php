<?php
if (!isset($_GET)) die();

$language = $_GET["language"];

if ($language === "spanish") {
  $array = ["uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve", "diez"];
  for ($i = 0; $i < count($array); $i++) echo "<option>" . $array[$i] . "</option>";
} else {
  $array = ["one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten"];
  for ($i = 0; $i < count($array); $i++) echo "<option>" . $array[$i] . "</option>";
}
