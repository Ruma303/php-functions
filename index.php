<?php //% Aspetti delle funzioni

//include './fn.php';

//$ Sintassi delle funzioni

//* Definizione funzione
/* function saluta() {
    echo "Ciao, mondo!<br>";
}
saluta();
saluta();
saluta(); */

//$ Pre-invocazione

    /* saluta();

    function saluta() {
        echo "Ciao, mondo!";
    }
 */
    //* Pre-invocazione non possibile
    /* if (false) {
        function miaFunzione() {
            echo "Questa funzione non esiste ancora.";
        }
    }
    miaFunzione(); */  //! Errore


//% Parametri delle funzioni

//$ Variabili esterne nelle funzioni
/* $username = 'Topolino';
function stampaUsername() {
    global $username;
    //$user = $GLOBALS['username'];
    echo "Dentro la funzione: $username.<br>";
}
stampaUsername();
echo "Fuori la funzione: $username."; */



//$ Parametri in input
/* function saluta($nome) {
    echo "Ciao, $nome.<br>";
}
saluta('Lorenzo');
saluta('Elisa');
 */

//* Cosa avviene implicitamente
/* function saluta() {
    $nome = 'Lorenzo';
    echo "Ciao, $nome.<br>";
    $nome = 'Elisa';
    echo "Ciao, $nome.<br>";
}
saluta(); */


//$ Passare variabili esterne come parametri
/* $nome = 'Mirko';
saluta($nome);
function saluta($nome) {
    echo "Ciao $nome.";
} */


//$ Nomi e numeri dei parametri
/* $numero1 = 10;
$numero2 = 20;
function sommaNumeri($a, $b) {
    $somma = $a + $b;
    echo $somma . '<br>';
}
sommaNumeri($numero1, $numero2); // 30
sommaNumeri(10, $numero1); // 20
sommaNumeri($numero2 % 3, pow(5,2)); // 27 */



//$ Numero di parametri variabili (…Spread Operator)
/* function somma(...$numeri) {
    echo '<pre>';
    print_r($numeri); // 3
    echo '<pre>';
    $somma = 0;
    foreach ($numeri as $numero) {
        $somma += $numero;
    }
    echo "Somma: $somma";
}
echo somma(1, 2, 3, 4); // 10 */


/* function somma($a, $b, ...$numeri) {
    echo '<pre>';
    print_r($numeri); // 3
    echo '<pre>';
    $somma = $a + $b;
    foreach ($numeri as $numero) {
        $somma += $numero;
    }
    echo "Somma: $somma";
}
echo somma(1, 2, 3); */ // 6




//$ Tipologia di passaggio dei parametri

//* Per valore
/* $test_numero = 10;
function aggiungiCinque($numero) {
    $numero += 5;
}
aggiungiCinque($test_numero);
echo $test_numero; // 10 */


//* Per riferimento
/* $test_numero = 10;
echo $test_numero; // 10
function aggiungiCinque(&$numero) {
    $numero += 5;
}
aggiungiCinque($test_numero);
echo $test_numero; // 15
 */


//$ Parametri opzionali
/* function saluta($nome = "Ospite") {
    echo "Ciao, $nome!<br>";
}
saluta("Luigi"); // Ciao, Luigi!
saluta();        // Ciao, Ospite! */



//$ Type hinting
/* function somma(int $a, int $b) {
    return $a + $b . '<br>';
}
echo somma(1, 2); // 3
echo somma("1", "2");
// 3, le stringhe numeriche vengono convertite in interi
echo somma("uno", "due"); */
//! Errore: argomenti non validi


/* function somma(int $a, int $b): int {
    return $a + $b;
}
echo somma("1", "2"); //3 */



//* Modalità strict
/* declare(strict_types = 1);
function somma(int $a, int $b) {
    return $a + $b;
}
echo somma("1", "2"); */
//! Errore: argomenti non validi


//* Union Types
/* declare(strict_types = 1);
function stampa(string|float|int|bool|array $value) {
//function stampa(mixed $value) {
//function stampa(float|int $value): float|int {
    var_dump($value);
    echo '<br>';
    return $value;
} */
//stampa('Ciao, mondo!');
//stampa(3.14);
//stampa(123);
//stampa(true);
//stampa([]);
//stampa(null); // NULL