<?php
class Database extends PDO { 
  private $tipo_de_base = 'pgsql';
  private $host = 'localhost';
  private $nombre_de_base = 'ecomerce';
  private $usuario = 'postgres';
  private $contrasena = '12345678'; 
  public function __construct() {
     try{
        parent::__construct("{$this->tipo_de_base}:dbname={$this->nombre_de_base};host={$this->host};", $this->usuario, $this->contrasena);
     }catch(PDOException $e){
        echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
        exit;
     }
  }
  public function insertUserType($data){
      
  } 
}
 $conexion = new Database(); 
?>