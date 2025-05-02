<?php

$nome = $_GET['nome'];
$idade = $_GET['idade'];

if ($nome == "") 
{
    print "<h1>Faltou inserir o nome</h1>";
}elseif ($idade == "") {
    print "<h1>Faltou inserir a idade</h1>";
}else
{
    print "<h1>Bem-vindo(a) " . $nome . "-" . $idade . " anos!</h1>";
    print "<br>";
    print "<a href='form.php'>Voltar</a>";
}