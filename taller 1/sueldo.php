<?php
$HL = $_GET ['horas'];
$VH = $_GET['valor'];

$total = $HL * $VH;
echo "El valor total del sueldo es: ", $total;
?>