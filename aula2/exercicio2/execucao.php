<?php

require_once("../exercicio2/modelos/Presidente.php");

$Eurico = new Presidente(16, "Eurico Gaspar Dutra", 1946, 1951);
$Getulio = new Presidente(17, "Getúlio Vargas", 1951, 1954);
$Cafe = new Presidente(18, "Café Filho", 1954, 1955);
$Luz = new Presidente(19, "Carlos Luz", 1955, 1955);
$Ramos = new Presidente(20, "Nereu Ramos", 1955, 1956);
$JK = new Presidente(21, "Juscelino Kubitschek", 1956, 1961);

$presidentes = array();
array_push($presidentes, $Eurico, $Getulio, $Cafe, $Luz, $Ramos, $JK);

print "<table border='1'>";

print "<tr>";
print "<th>Número</th>";
print "<th>Nome</th>";
print "<th>Ano Início</th>";
print "<th>Ano Fim</th>";
print "</tr>";

foreach($presidentes as $pres)
{
    print "<tr>";
    print "<td>" . $pres->getNumero() . "</td>";
    print "<td>" . $pres->getNome() . "</td>";
    print "<td>" . $pres->getAnoIni() . "</td>";
    print "<td>" . $pres->getAnoFim() . "</td>";
    print "</tr>";
}

print "</table>";