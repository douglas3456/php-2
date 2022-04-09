<?php

//
$variavel = 'segunda';
echo $variavel.'<hr>';

//
$vetor = array(
          "domingo",
          "segunda",
          "terça",
          "quarta",
          "quinta",
          "sexta",
          "sabado"

);

echo $vetor[2].'<hr>'; 

//
$mes = array(
        1=>"jan",
        2=>"fev",
        3=> "mar",
        4=>"abr",
        5=> "mai"  
);

echo $mes [2].'<hr>';

//vetor
$mes2 = array(
        'jan'=>'janeiro',
        'fev'=> 'fevereiro',
        'mar'=> 'março',
        4 => 'abril',
        'banana'=> 'maio'

);
echo $mes2 ['jan'].'<hr>';
?>