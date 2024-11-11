<?php
$n = 8;
$r = 0;
$res = "";
while ($n != 0) {
  $r = $n % 2;
  $n = floor($n / 2);
  $res = $r . $res;
}
printf("%s", $res);
