<?php

for ($i=20; $i <= 70; $i++) 
{ 
    if ($i % 2 == 0)
    {
        $pares += $i;
    }else
    {
        $impares +=$i;
    }
    
}

print "A soma dos números pares é de: " . $pares . "<br>";
print "A soma dos números impares é de: " . $impares;

