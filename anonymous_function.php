<?php
//% Funzioni anonime


//, IIFE

//* Senza invocazione
/* function () {
    $nome = "Marco";
    echo $nome . '<br>';  // Marco
}; */


//* IIFE
/* $nome = "Matteo";
echo $nome;  // Matteo

(function () {
    $nome = "Marco";
    echo $nome . '<br>';  // Marco
})();

echo $nome;  // Matteo */


//% First Class Functions

//, Funzioni assegnate a variabili
/* $saluta = function($nome) {
    return "Ciao, $nome!";
};
echo $saluta("Mario");  // Ciao, Mario!" */


//, Callback: Passare una funzione come argomento a un'altra funzione
/* function funzioneSuperiore(callable $callback, int|float $valore) {
    //var_dump($callback);
    echo "Funzione anonima \$funzioneSuperiore() eseguita.<br>";
    return $callback($valore);
}

$callback = function ($numero) {
    echo "Funzione anonima \$callback() eseguita.<br>";
    return $numero * 2;
};

echo funzioneSuperiore($callback, 10); */



//% Closure
/* $saluto = "Ciao, mondo!";

$funzione = function () use ($saluto) {
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

echo 'Arrow Function: <br>'; var_dump($arrowFunction);
echo '<br>Closure: <br>'; var_dump($closure); */