<?php

require_once('model/Veiculo.php');

$veiculo = new Veiculo;

$veiculo->setModelo($_POST["modelo"]);
$veiculo->setMarca($_POST["marca"]); 
$veiculo->setTipoCombustivel($_POST["combustivel"]);

echo "<h1>Dados informados para o veículo</h1>";
echo "Modelo: " . $veiculo->getModelo() . "<br>";
echo "Marca: " . $veiculo->getMarca() . "<br>";
echo "Combustível: " . $veiculo->getTipoCombustivel() . "<br>";
echo "<br><br>";
echo "<a href='form.php'>Cadastrar outro veículo</a>";