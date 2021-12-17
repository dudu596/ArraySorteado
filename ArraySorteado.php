<?php

function GeraArrayAleatorio($tamanho, $min, $max)
{
    $array = [];
    for($index = 1; $index <= $tamanho; $index++){
        array_push($array, rand($min,$max));
    }
    return $array;
}

function GeraArrayUnico()
{
    // Verifica quais valores são únicos
    $array_inicial = GeraArrayAleatorio(20, 1, 10);
    $array_final = [];
    $array_count = array_count_values($array_inicial);
    foreach ($array_count as $key => $value){
        if($value == 1){
            array_push($array_final, $key);
        }
    } 
    // Mostra na tela
    echo "Array Inicial: ";
    echo implode(", ", $array_inicial);
    echo "<br>";
    echo "Array Final: ";
    echo implode(", ", $array_final);
    echo "<br>";
}

GeraArrayUnico();