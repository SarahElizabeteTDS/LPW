<?php

$numeroUm = $_GET['numeroUm'];
$numeroDois = $_GET['numeroDois'];

if (isset($_GET['numeroUm']) && isset($_GET['numeroDois'])) 
{
    print "Soma: " . soma($numeroUm, $numeroDois);
    print "<br>";
    print "Subtração: " . subtracao($numeroUm, $numeroDois);
    print "<br>";
    print "Multiplicação: " . multiplicacao($numeroUm, $numeroDois);
    print "<br>";
    print "Divisão: " . divisao($numeroUm, $numeroDois);
    print "<br>";
    print "Resto: " . resto($numeroUm, $numeroDois);
}else {
    print "Insira os dois números na URL!";
}

function soma($a,$b)
{
    return $a + $b;
}

function subtracao($a,$b)
{
    return $a - $b;
}

function multiplicacao($a,$b)
{
    return $a * $b;
}

function divisao($a,$b)
{
    return $a / $b;
}

function resto($a,$b)
{
    return $a % $b;
}

