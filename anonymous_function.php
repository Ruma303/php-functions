<?php
//% Funzioni anonime

//$ IIFE
/* (function () {
    $nome = "Marco";
    echo $nome . '<br>';  // Marco
})();
$nome = "Matteo";
echo $nome;  // Matteo */


//$Funzioni assegnate a variabili
/* $fn = function () {
    echo 'Hello World!';
};
$fn(); */



//% First Class Functions

//$ Assegnare una funzione a una variabile
/* $saluta = function($nome) {
return "Ciao, $nome!";
};
echo $saluta("Mario");  // Ciao, Mario!" */

//$ Closure: Passare una funzione come argomento a un'altra funzione

/* function funzioneSuperiore($callback, 5) {
    echo "Funzione anonima \$funzioneSuperiore() eseguita.<br>";
    return $callback(5);
} */

   /*  function funzioneSuperiore($funzione, $valore) {
        echo "Funzione anonima \$funzioneSuperiore() eseguita.<br>";
        return $funzione($valore);
    }
    $callback = function($numero) {
        echo "Funzione anonima \$callback() eseguita.<br>";
        return $numero * 2;
    };
    echo funzioneSuperiore($callback, 5); */