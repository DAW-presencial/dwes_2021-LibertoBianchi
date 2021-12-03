<?php

spl_autoload_register(function ($nomclase) {
    require __DIR__ . "/clases2/$nomclase.php";
});



$obj = new Persona2();

var_dump($obj);
//var_dump(spl_classes());

