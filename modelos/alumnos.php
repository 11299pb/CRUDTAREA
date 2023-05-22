<?php
require 'Conexion.php';

class Alumno extends Conexion{
    public $alumnos_id;
    public $alumnos_nombre;
    public $alumnos_apellido;
    public $alumnos_fecha_naci;
    public $alumnos_telefono;
    public $alumnos_correo;


    public function __construct($args = [] )
    {
        $this->alumnos_id = $args['alumnos_id'] ?? null;
        $this->alumnos_nombre = $args['alumnos_nombre'] ?? '';
        $this->alumnos_apellido = $args['alumnos_apellido'] ?? '';
        $this->alumnos_fecha_naci = $args['alumnos_fecha_naci'] ?? '';
        $this->alumnos_telefono = $args['alumnos_telefono'] ?? '';
        $this->alumnos_correo = $args['alumnos_correo'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO alumnos(alumnos_nombre, alumnos_apellido, alumnos_fecha_naci, alumnos_telefono, alumnos_correo) values('$this->alumnos_nombre','$this->alumnos_apellido', '$this->alumnos_fecha_naci', '$this->alumnos_telefono', '$this->alumnos_correo')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}