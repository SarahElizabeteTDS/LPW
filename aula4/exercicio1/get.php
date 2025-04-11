<?php

$numeroUm = $_GET['numeroUm'];
$numeroDois = $_GET['numeroDois'];

function soma($a,$b)
{
    return $a + $b;
}

print soma($numeroUm, $numeroDois);