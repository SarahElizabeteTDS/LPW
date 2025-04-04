<?php

function tabelaJogador($numero,$nome,$corFundo)
{
    print"<tr style='background-color:{$corFundo}'>";
    print "<td>". $numero ."</td>";
    print "<td>". $nome ."</td>";
    print"</tr>";
}

print "<table border='1'>";

print"<tr>";
print"<th>Nome</th>";
print"<th>Número</th>";
print"</tr>";

tabelaJogador('1', "Tafarel", '#FFFF00');
tabelaJogador('2', "Jorginho", '#00FF00');
tabelaJogador('13', "Aldair", '#FFFF00');
tabelaJogador('15', "Márcio Santos", '#00FF00');
tabelaJogador('6', "Branco", '#FFFF00');
tabelaJogador('5', "Mauro Silva", '#00FF00');
tabelaJogador('8', "Dunga", '#FFFF00');
tabelaJogador('17', "Mazinho", '#00FF00');
tabelaJogador('9', "Zinho", '#FFFF00');
tabelaJogador('11', "Romário", '#00FF00');
tabelaJogador('7', "Bebeto", '#FFFF00');

print "</table>";