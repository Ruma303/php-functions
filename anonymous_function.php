<?php
//% Funzioni anonime

//$ IIFE
/* (function () {
    $nome = "Marco";
    echo $nome . '<br>';  // Marco
})();
$nome = "Matteo";
echo $nome;  // Matteo */


//% First Class Functions

//$ Funzioni assegnate a variabili
/* $saluta = function($nome) {
    return "Ciao, $nome!";
};
echo $saluta("Mario");  // Ciao, Mario!" */


//$ Callback: Passare una funzione come argomento a un'altra funzione
/* function funzioneSuperiore($callback, 5) {
    echo "Funzione anonima \$funzioneSuperiore() eseguita.<br>";
    return $callback(5);
}
 */
/* function funzioneSuperiore(callable $funzione,int|float $valore) {
    //var_dump($funzione);
    echo "Funzione anonima \$funzioneSuperiore() eseguita.<br>";
    return $funzione($valore);
}
$callback = function ($numero) {
    echo "Funzione anonima \$callback() eseguita.<br>";
    return $numero * 2;
};
echo funzioneSuperiore($callback, 10); */



//% Closure
/* $saluto = "Ciao, mondo!";
$funzione = function() use ($saluto) {
    return $saluto;
};
echo $funzione(); // Ciao, mondo! */


//% Arrow function

// $var = fn(parameters) => expression;

/* $saluto = "Ciao, mondo!";
$funzione = fn() => $saluto;
echo $funzione(); // Ciao, mondo! */

/* $factor = 10;
$array = [1, 2, 3, 4, 5];
$arrowFunction = array_map(fn($val) => $val * $factor, $array);

$closure = array_map(function($val) use ($factor) {
    return $val * $factor;
}, $array);

echo 'Arrow Function: <br>';
print_r($arrowFunction);
echo '<br>Closure: <br>';
print_r($closure); */
