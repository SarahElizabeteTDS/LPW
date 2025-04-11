<?php

$numeroUm = $_POST['numeroUm'];
$numeroDois = $_POST['numeroDois'];

function soma($a,$b)
{
    return $a + $b;
}

print soma($numeroUm, $numeroDois);