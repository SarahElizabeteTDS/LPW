<?php

$ac = array(['numero' => '1', 'cor' => 'yellow'],['numero' => '2', 'cor' => 'blue'],['numero' => '3', 'cor' => 'black'],['numero' => '4', 'cor' => 'green'],['numero' => '5', 'cor' => 'red'],['numero' => '6', 'cor' => 'purple'],['numero' => '7', 'cor' => 'gray'],['numero' => '8', 'cor' => 'brown'],);

foreach($ac as $a)
{
    print "<div style = \"background-color: " . $a['cor'] . "; width: 100px; height: 100px;\"></div>";
}
