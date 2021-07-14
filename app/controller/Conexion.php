<?php 
    //Clase conexion
    class Conexion{

        protected $con;

        //constructor
        public function __construct(){

        }

        public function conectar(){
            $server="localhost";
            $usuario="root";
            $clave="";
            $base="palmtreeblog";
            $this->con=mysqli_connect($server,$usuario,$clave,$base);
            mysqli_set_charset($this->con,'utf8mb4'); 
            return $this->con;
        }

        public function close(){
            $this->con = null;
        }
        
    }
    
?>