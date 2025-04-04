<?php

require_once("model/Link.php");

print "<link rel='stylesheet' href='style.css'>";

function criarBotao($arrayLinks, $botaoNome)
{
    print "<div class='dropdown'>";
    print "<button class='dropbtn'>{$botaoNome}</button>";
    print "<div class='dropText'>";
    print "<span><img src='{$arrayLinks[0]->getLinkImg()}' width='20' height='20'>{$arrayLinks[0]->getInfo()}</span>";
    print "<span><img src='{$arrayLinks[1]->getLinkImg()}' width='20' height='20'>{$arrayLinks[1]->getInfo()}</span>";
    print "<span><img src='{$arrayLinks[2]->getLinkImg()}' width='20' height='20'>{$arrayLinks[2]->getInfo()}</span>";
    print "</div>";
    print "</div>";
}

$carros = array();
$carroUm = new Link("https://i.pinimg.com/736x/51/27/5e/51275e617e35edcfef07fb5d6cabe18e.jpg", "Celta");
$carroDois = new Link("https://upload.wikimedia.org/wikipedia/commons/e/e3/Volkswagen_Gol_Highline_2023_%2853708009248%29_%28cropped%29.jpg", "Gol");
$carroTres = new Link("https://classic.exame.com/wp-content/uploads/2024/03/MONZA-1.jpg", "Monza");
array_push($carros, $carroUm, $carroDois, $carroTres);
criarBotao($carros, "Carros");

$times = array();
$timeUm = new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Gremio_logo.svg/1718px-Gremio_logo.svg.png", "Grêmio");
$timeDois = new Link("https://a.espncdn.com/combiner/i?img=/i/teamlogos/soccer/500/1936.png", "Internacional");
$timeTres = new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Flamengo_braz_logo.svg/250px-Flamengo_braz_logo.svg.png", "Flamengo");
array_push($times, $timeUm, $timeDois, $timeTres);
criarBotao($times, "Times");

$concursosMilitares = array();
$concursoUm = new Link("https://www2.fab.mil.br/incaer/images/eventgallery/SISCULT/Heraldica/Emblemas/Imagens/eear.gif", "EEAR");
$concursoDois = new Link("https://www2.fab.mil.br/incaer/images/eventgallery/SISCULT/Heraldica/Emblemas/Imagens/afa.gif", "AFA");
$concursoTres = new Link("https://upload.wikimedia.org/wikipedia/pt/1/1f/ITA_logo.png", "ITA");
array_push($concursosMilitares, $concursoUm, $concursoDois, $concursoTres);
criarBotao($concursosMilitares, "Concursos Militares");

$cores = array();
$cor1 = new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Color_icon_green.svg/1200px-Color_icon_green.svg.png", "Verde");
$cor2 = new Link("https://static.lojadopapel.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/s/c/scrapbook-neonplus-roxo.jpg", "Roxo");
$cor3 = new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Color_icon_yellow.svg/800px-Color_icon_yellow.svg.png", "Amarelo");
array_push($cores, $cor1, $cor2, $cor3);
criarBotao($cores, "Cores");

