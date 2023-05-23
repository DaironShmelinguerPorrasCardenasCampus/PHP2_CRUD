<?php

require_once("db.php");

class Config{
    //atributos se llaman como los campos de la tabla

    private $id;
    private $nombres;
    private $direccion;
    private $logros;
    protected $dbCnx; //conexion a la base de datos

    //CONSTRUCTOR
    public function __construct($id = 0 , $nombres= "", $direccion = "", $logros = "")
    {
        $this->id = $id ;
        $this->nombres = $nombres;
        $this->direccion = $direccion;
        $this->logros = $logros;
        $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER,DB_PWD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]); //
    }

}








?>