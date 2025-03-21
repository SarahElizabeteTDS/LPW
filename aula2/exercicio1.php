<?php

$EUA = array("ordem" => 1,
            "imagem" => "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/22px-Flag_of_the_United_States.svg.png'>",
            "abrev" => "<span style=\"font-size:10px; font-weight: bold\"> EUA</span>",
            "pais" => "  Estados Unidos", 
            "ouro" => 46,
            "prata" => 37,
            "bronze" => 38,
            "total" => 121);

$GBR = array("ordem" => 2,
            "imagem" => "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Flag_of_the_United_Kingdom_%283-5%29.svg/22px-Flag_of_the_United_Kingdom_%283-5%29.svg.png'>",
            "abrev" => "<span style=\"font-size:10px; font-weight: bold\"> GBR</span>",
            "pais" => "  Grã-Betanha", 
            "ouro" => 27,
            "prata" => 23,
            "bronze" => 17,
            "total" => 67);

$CHN = array("ordem" => 3,
            "imagem" => "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/22px-Flag_of_the_People%27s_Republic_of_China.svg.png'>",
            "abrev" => "<span style=\"font-size:10px; font-weight: bold\"> CHN</span>",
            "pais" => "  China", 
            "ouro" => 26,
            "prata" => 18,
            "bronze" => 26,
            "total" => 70);

$RUS = array("ordem" => 4,
            "imagem" => "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/22px-Flag_of_Russia.svg.png'>",
            "abrev" => "<span style=\"font-size:10px; font-weight: bold\"> RUS</span>",
            "pais" => "  Russia", 
            "ouro" => 19,
            "prata" => 17,
            "bronze" => 20,
            "total" => 56);

$GER = array("ordem" => 5,
            "imagem" => "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/22px-Flag_of_Germany.svg.png'>",
            "abrev" => "<span style=\"font-size:10px; font-weight: bold\"> GER</span>",
            "pais" => "  Alemanha", 
            "ouro" => 17,
            "prata" => 10,
            "bronze" => 15,
            "total" => 42);

$paises = array();
array_push($paises,$EUA,$GBR,$CHN,$RUS,$GER);

print "<table border='1'>";

print "<tr>";
print "<th>Ordem</th>";
print "<th>País</th>";
print "<th><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Gold_medal.svg/15px-Gold_medal.svg.png'></th>";
print "<th><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Silver_medal.svg/15px-Silver_medal.svg.png'></th>";
print "<th><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/Bronze_medal.svg/15px-Bronze_medal.svg.png'></th>";
print "<th><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/GoldSilverBronze_medals.svg/30px-GoldSilverBronze_medals.svg.png'></th>";
print "</tr>";

foreach($paises as $pais)
{
    print "<tr>";
    print "<td>" . $pais['ordem'] . "</td>";
    print "<td>" . $pais['imagem'] . $pais['abrev'] . $pais['pais'] . "</td>";
    print "<td>" . $pais['ouro']  . "</td>";
    print "<td>" . $pais['prata']  . "</td>";
    print "<td>" . $pais['bronze']  . "</td>";
    print "<td>" . $pais['total']  . "</td>";
    print "</tr>";
}

print "</table>";