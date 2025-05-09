<?php

require_once("model/carta.php");
print "<link rel='stylesheet' href='style.css'>";

$nomeFilme = $_POST['nomeFilme'];
$diretor = $_POST['diretor'];
$ano = $_POST['ano'];
$imagem = $_POST['imagem'];

$cardFilme = new CartaFilme($nomeFilme,$diretor,$ano,$imagem);
print $cardFilme;
