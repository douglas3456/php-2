<?php


$media=7;
$Nota= array(
    'Douglas'=>8.5,
    'Victoria'=> 9.9,
    'Leonardo'=>6.0,
    'Emily'=>3.0,
    'Pablo'=>10,
    'Maria'=>4.6,
    'Eleno'=>1.5,
    'Pedro'=>2.3,
    'João'=>7.5,
    'Rafael'=> 6.0
);
foreach ($Nota as $key => $value) {
   
    if ($value >= $media) {
        $resultado="aprovado";
    } else {
        $resultado="reprovado";
    }
    
    
    echo $key.'-nota:'.$value.'-'.$resultado.'<br>';
}


?>