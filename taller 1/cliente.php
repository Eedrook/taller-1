<?php
$volante = $_GET ['volante'];
$poster = $_GET ['poster'];
$tarjetas = $_GET ['tarjetas'];

$volante = $volante*2000;
$poster = $poster*5000;
$tarjetas = $tarjetas*500;

$total = $volante+$poster+$tarjetas;


echo "El total de puntos es: ",  $total;
?>