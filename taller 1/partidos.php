<?php
$pganados = $_GET ['ganados'];
$pperdidos = $_GET ['perdidos'];
$pempatados = $_GET ['empatados'];

$pganados = $pganados*3;
$pperdidos = $pperdidos*0;
$pempatados = $pempatados*1;

$total = $pganados+$pperdidos+$pempatados;


echo "El total de puntos es: ",  $total;
?>