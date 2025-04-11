<?php

if (isset($_GET['cor'])) 
{
    $cor = $_GET['cor'];
    if ($cor != "") 
    {
        print "<body style='background-color:". $cor .";'></body>";
    }else{
        print "Insira a cor na URL"; 
    }  
}else{
    print "Insira a cor na URL";
}

