<?php

require_once("../exercicio3/modelos/Pokemon.php");

$Psyduck = new Pokemon("Psyduck", 54, "Água", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/054.png","https://www.pokemon.com/br/pokedex/psyduck");
$Charmander = new Pokemon("Charmander", 4, "Fogo", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/004.png", "https://www.pokemon.com/br/pokedex/charmander");
$Zoroark = new Pokemon("Zoroark", 571, "Dark", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/571.png", "https://www.pokemon.com/br/pokedex/zoroark");
$Abra = new Pokemon("Abra", 63, "Psíquico", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/063.png", "https://www.pokemon.com/br/pokedex/abra");
$Jigglypuff = new Pokemon("Jigglypuff", 39, "Fada", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/039.png", "https://www.pokemon.com/br/pokedex/jigglypuff");

$pokemons = array();
array_push($pokemons, $Psyduck, $Charmander, $Zoroark, $Abra, $Jigglypuff);

print "<table border='1'>";

print "<tr>";
print "<th>Nome</th>";
print "<th>Número</th>";
print "<th>Tipo</th>";
print "<th>Imagem</th>";
print "<th>Link Dados</th>";
print "</tr>";

foreach($pokemons as $pok)
{
    print "<tr>";
    print "<td>" . $pok->getNome() . "</td>";
    print "<td>" . $pok->getNum(). "</td>";
    print "<td>" . $pok->getTipo() . "</td>";
    print "<td> <img width=150px src='{$pok->getImg()}'> </td>";
    print "<td> <a href='{$pok->getLinkDados()}'>Clique Aqui!</a> </td>";
    print "</tr>";
}

print "</table>";