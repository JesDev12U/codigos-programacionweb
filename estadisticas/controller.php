<?php
if (!isset($_GET)) die();
function promedio($arr)
{
  if (count($arr) === 0) return 0;
  $sum = 0;
  for ($i = 0; $i < count($arr); $i++) $sum += $arr[$i];
  return $sum / count($arr);
}

function mejoresAlumnos($arr)
{
  $prom = promedio($arr);
  $cont = 0;
  for ($i = 0; $i < count($arr); $i++)
    if ($arr[$i] >= $prom) $cont++;
  return $cont;
}

function peoresAlumnos($arr)
{
  $prom = promedio($arr);
  $cont = 0;
  for ($i = 0; $i < count($arr); $i++)
    if ($arr[$i] < $prom) $cont++;
  return $cont;
}

function reprobados($arr)
{
  $count = 0;
  for ($i = 0; $i < count($arr); $i++)
    if ($arr[$i] < 6) $count++;
  return $count;
}

function aprobados($arr)
{
  $count = 0;
  for ($i = 0; $i < count($arr); $i++)
    if ($arr[$i] >= 6) $count++;
  return $count;
}

$calificaciones = array();

for ($i = 0; $i < 10; $i++) {
  $key = 'calif' . $i;
  $calificaciones[] = (int)$_GET[$key];
}

echo "<h3>Resultados</h3>";
echo "<ul>";
echo "<li><b>Promedio:</b> " . promedio($calificaciones) . "</li>";
echo "<li><b>Calificación mínima: </b>" . min($calificaciones) . "</li>";
echo "<li><b>Calificación máxima: </b>" . max($calificaciones) . "</li>";
echo "<li>La cantidad de <b>peores alumnos</b> es de: " . peoresAlumnos($calificaciones) . "</li>";
echo "<li>La cantidad de <b>mejores alumnos</b> es de: " . mejoresAlumnos($calificaciones) . "</li>";
echo "<li>La cantidad de <b>reprobados</b> es de: " . reprobados($calificaciones) . "</li>";
echo "<li>La cantidad de <b>aprobados</b> es de: " . aprobados($calificaciones) . "</li>";
echo "</ul>";
