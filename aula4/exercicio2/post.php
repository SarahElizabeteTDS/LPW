<?php

$numeroUm = $_POST['numeroUm'];
$numeroDois = $_POST['numeroDois'];
$numeroTres = $_POST['numeroTres'];

function calcularMedia($a,$b,$c)
{
    return ($a+$b+$c)/3;
}

print calcularMedia($numeroUm, $numeroDois, $numeroTres);