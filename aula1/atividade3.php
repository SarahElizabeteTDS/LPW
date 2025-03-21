<?php

$re1 = array('base' => '10', 'altura' => '20');
$re2 = array('base' => '30', 'altura' => '50');
$re3 = array('base' => '50', 'altura' => '80');

$matriz = array($re1,$re2,$re3);

$i = 1;

foreach ($matriz as $re) 
{
    print "A área do retângulo ". $i . " é: " . areaRet($re['base'], $re['altura']) . "<br>";
    $i++;
}

function areaRet($b,$a)
{
    return $b*$a;
}