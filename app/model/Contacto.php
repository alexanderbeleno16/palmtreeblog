<?php
    //Clase contacto
    class Contacto{
        //atributos
        protected $nombre;
        protected $correo;
        protected $asunto;

        //constructor
        public function __construct(){

        }
        
        //metodos
        public function guardarContacto($contacto_nombre, $contacto_correo, $contacto_asunto){
            
            require_once("../controller/Conexion.php");
            require_once("Alertas.php");
            $conexion = new Conexion();
            $alerta = new Alertas();
            
            $conx = $conexion->conectar();
            $query = "INSERT INTO contacto VALUES ('','$contacto_nombre','$contacto_correo','$contacto_asunto');";
            mysqli_query($conx,$query) or die ("Insercion contacto Fallida en la tabla contacto");
            $alerta->alertaRegistroExitoso();
        }

        //metodos get y set
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($contacto_nombre){
            $this->nombre = $contacto_nombre;
        }

        public function getCorreo(){
            return $this->correo;
        }
        public function setCorreo($contacto_correo){
            $this->correo = $contacto_correo;
        }

        public function getAsunto(){
            return $this->asunto;
        }
        public function setAsunto($contacto_asunto){
            $this->asunto = $contacto_asunto;
        }

        //metodo toString Override
        public function toString(){
            echo $this->nombre . "<br/>" 
            . $this->correo . "<br/>" 
            . $this->asunto . "<br/>";
         }

    }



?>