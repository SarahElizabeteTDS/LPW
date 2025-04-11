<?php

require_once("modelo/Pessoa.php");

if (isset($_GET['tipo'])) 
{
    $tipo = $_GET['tipo'];
    $nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
    $idade = $_GET['idade'];
    
    if ($_GET['tipo'] == 'A') 
    {
        $pessoa = ['nome'=> $nome,
                    'sobrenome'=> $sobrenome,
                    'idade'=> $idade,];
        print "Nome completo: ". $pessoa['nome']. " " . $pessoa['sobrenome'] . "<br>Idade: " . $pessoa['idade'];
    }elseif ($_GET['tipo'] == 'C') 
    {
        $pessoa = new Pessoa($nome, $sobrenome, $idade);
        print $pessoa;
    }else {
        print "Insira um tipo válido";
    }
}else {
    print "Insira algo válido nos parâmetros";
}