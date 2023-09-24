<?php

//namespace Haberes;

include 'ActiveRecord.php';


use AccesoDatos\ActiveRecord;


class Pais extends ActiveRecord {
    public $pai_id;
    public $pai_nombre;
    public $pai_nacionalidad;
    public $pai_vigente;

    // Constructor
    public function __construct() {
        $pai_id = null;
        $pai_nombre = null;
        $pai_nacionalidad = null;
        $pai_vigente = null;
    }

    public function Leer(){}
    public function Insertar(){}
    public function Actualizar(){}
    public function Eliminar(){}

    public function Imprimir(){
        $ref = new ReflectionClass($this);
        foreach ($ref->getProperties() as $prop) {
            echo "Propiedad: " . $prop->name . "\n";
            echo "Valor: " . $ref->getProperty($prop->name)->getValue($this) ."\n";
            
            //print_r($prop);
        }
    }

}

$pais = new Pais();
$pais->pai_nombre = "Argentina";
$pais->Imprimir();





?>