<?php

//% Variabili static

/* function counting() {
    static $count = 1;
    echo "Funzione chiamata $count volte.<br>";
    $count++;
}
counting(); // 1
counting(); // 2
counting(); // 3
counting(); // 4
 */


//% Valori di ritorno delle funzioni

/*  function somma($num1, $num2) {
    return $num1 + $num2;
    echo "Codice non eseguibile.";
}
$total = somma(5, 10);
echo $total; // 15 */

//$ return vs echo
/* function stampa() {
    return echo '' ;
} */

/* function stampa() {
    echo 'Ciao, mondo!';
    return;
} stampa(); // Ciao, mondo! */

/* function stampa() {
    return 'Ciao, mondo!';
}
echo stampa(); // Ciao, mondo! */


//% Principio di Responsabilità Unica
/* function somma(int $num1, int $num2) : int {
    echo "Codice eseguito. ";
    return $num1 + $num2;
}
echo somma(5, 10); // Codice eseguito. 15 */

/* function somma(int $num1, int $num2) : int {
    return $num1 + $num2;
}
echo "Codice eseguito. ";
echo somma(5, 10); // Codice eseguito. 15 */


/* //? Funzione che ritorna la somma
function somma(int $num1, int $num2) : int {
    return $num1 + $num2;
}
$somma = somma(5, 10);

//? Funzione che stampa la somma
function stampaSomma($numero) {
    echo "La somma è: $numero.";
}
stampaSomma($somma); // La somma è: 15. */


//% Funzioni pure e impure

//$ Funzioni pure
/* function aggiungi($a, $b) {
    return $a + $b;
}
echo aggiungi(5, 3); // 8 */

//$ Funzioni impure
/* $counter = 0;
function incrementa() {
    global $counter;
    $counter++;
}
incrementa();
echo $counter; // 1 */

/* function leggiFile($nomeFile) {
    return file_get_contents($nomeFile);
} */


//% Ricorsione
/* function fattoriale($numero) {
    if ($numero == 0) {
        return 1; // Caso base
    } else {
        return $numero * fattoriale($numero - 1); // Chiamata ricorsiva
    }
}
echo fattoriale(5);  // 120 */


//% Chiamate a funzioni dinamiche
/* function chiara() {
    echo "Mi chiamo Chiara. <br>";
}
function francesca() {
    echo "Mi chiamo Francesca. <br>";
}
$nome = "chiara";
$nome(); // Mi chiamo Chiara.
$nome = "francesca";
$nome(); // Mi chiamo Francesca. */