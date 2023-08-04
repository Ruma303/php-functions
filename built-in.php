<?php
//% Alcune funzioni built-in PHP


//* func_num_args()
/* function test() {
    $numero_argomenti = func_num_args();
    echo "Numero di argomenti: $numero_argomenti";
}
test(1, 2, 3);  // Numero di argomenti: 3 */


//* func_get_arg()
/* function test() {
    $first_arg = func_get_arg(0);
    echo "Il primo argomento è $first_arg.";
}

test('Hello', 'World');
// Il primo argomento è Hello.
*/


//* func_get_args()
/* function test() {
    $args = func_get_args();
    foreach ($args as $arg) {
        echo "$arg\n";
}} test('Hello', 'World', '!'); */
// Hello World !


//* function_exists()
/* $exist = function_exists('test');
echo '<br>'. $exist; // 1 */


//* get_defined_functions()
/* $defined_functions = get_defined_functions();
echo '<pre>';
print_r($defined_functions);
echo '</pre>';
*/


//* is_callable()
/* function test() {
    echo "Hello, world!";
}
if (is_callable('test')) {
    echo 'test() is callable'; // ok
} else {
    echo 'test() is not callable';
} */


//* call_user_func()
/* function hello($name) {
    echo "Hello, $name!";
}
call_user_func('hello', 'World'); */
// Hello, World!


//* call_user_func_array()
/* function hello($greeting, $name) {
    echo "$greeting, $name!";
}
$params = array('Hello', 'World');
call_user_func_array('hello', $params); */
// Hello, World!


//* register_shutdown_function()
/* function shutdown($arg1, $arg2) {
    echo "Script executed. $arg1 $arg2.";
}
register_shutdown_function('shutdown', 'Good', 'Bye'); */
// Script executed. Good Bye.