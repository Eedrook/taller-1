<?php
$hermano1 = $_GET['hermano1'];
$hermano2 = $_GET['hermano2'];
$direfencia =  $hermano1 - $hermano2;
if($hermano1>$hermano2){
    if($hermano1>$hermano2){
        echo $hermano1, " se llevan ", $direfencia, " años de diferencia ";
    }else{
        echo $hermano2, " es mayor que ", $direfencia, " años de diferencia ";
    }
}
?>