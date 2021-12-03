<?php

$mensaje = "hola" ;
// Sin "use"
$ejemplo = function () {
    global $mensaje;
    var_dump($mensaje."<br>");
};
$ejemplo();

// Heredar $mensaje
$ejemplo = function () use ($mensaje) {
    var_dump($mensaje."<br>");
};
$ejemplo();

// El valor de la variable heredada está cuando la función
// está definida, no cuando se le invoca
$mensaje = 'mundo';
$ejemplo();

// Reiniciar el mensaje
$mensaje = 'hola';

// Heredar por referencia
$ejemplo = function () use (&$mensaje) {
    var_dump($mensaje."<br>");
};
$ejemplo();

// El valor cambiado en el ámbito padre
// se refleja dentro de la llamada a la función
$mensaje = 'mundo';
$ejemplo();

// Los cierres también aceptan argumentos normales
$ejemplo = function ($arg) use ($mensaje) {
    var_dump($arg . ' ' . $mensaje."<br>");
};
$ejemplo("hola");
?>