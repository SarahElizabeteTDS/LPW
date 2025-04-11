<?php

$numeroUm = $_GET['numeroUm'];
$numeroDois = $_GET['numeroDois'];
$numeroTres = $_GET['numeroTres'];

function calcularMedia($a,$b,$c)
{
    return ($a+$b+$c)/3;
}

print calcularMedia($numeroUm, $numeroDois, $numeroTres);