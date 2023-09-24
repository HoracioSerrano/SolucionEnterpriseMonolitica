<?php

namespace AccesoDatos;

abstract class ActiveRecord {
    abstract public function Leer();
    abstract public function Actualizar();
    abstract public function Insertar();
    abstract public function Eliminar();
}

?>