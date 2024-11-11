<?php
$k = $_GET["k"];

for ($i = 0; $i < $k; $i++) {
  $str = "";
  for ($j = 0; $j <= $i; $j++)
    $str = $str . "*";

  echo "<span style=\"display: block;\">" . $str . "</span>";
}
