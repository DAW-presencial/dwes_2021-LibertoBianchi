<?php

/*
 * Clases anónimas. Es una clase que no tiene nombre, al igual que existen funciones anónimas.
 * 
 * 
 */

class Usuario {

    protected $database;

    public function __construct($database) {
        $this->database = $database;
    }

    function select(): string {
        return $this->database->select();
    }

}

$usuario = new Usuario(
        new class {

            function select(): string {
                return "CONSULTA SELECT DE USUARIOS <br>";
            }
        }
);

$perfil = new class {
  protected $rol;  
  
  function mostrar_perfil() {
      echo "El perfil del usuario es est<br>";
  }
};

echo $usuario->select();


echo $perfil->mostrar_perfil();


class SomeClass {}
interface SomeInterface {}
trait SomeTrait {}

var_dump(new class(10) extends SomeClass implements SomeInterface {
    private $num;

    public function __construct($num)
    {
        $this->num = $num;
    }

    use SomeTrait;
});
