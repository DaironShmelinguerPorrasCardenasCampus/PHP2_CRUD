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
        $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PWD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC] );
    }

    //MÉTODOS

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this-> id;
    }

    public function setNombres($nombres){
        $this->nombres = $nombres;
    }
    public function getNombres(){
        return $this-> nombres;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }
    public function getDireccion(){
        return $this-> direccion;
    }

    public function setLogros($logros){
        $this->logros = $logros;
    }
    public function getLogros(){
        return $this-> logros;
    }

    public function insertData(){
        try {
            $stm = $this -> dbCnx -> prepare("INSERT INTO campers(nombres,direccion,logros) values(?,?,?)") ;// método para inserytar datos en la database - tabla campers
            $stm -> execute([$this->nombres , $this->direccion, $this->logros]);//
        } catch (Exception $e) {
            return $e->getMessage();
        }
       
    
    }
    
}








?>