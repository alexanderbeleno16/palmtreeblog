<?php
    //Clase Persona
    class Persona{
        //atributos
        protected $nombre;
        protected $apellido;
        protected $correo;

        //constructor
        public function __construct(){

        }
        
        //metodos
        public function validarDatosPersona($persona_nombre, $persona_apellido, $persona_correo, $login_usuario, $login_contrasena){
            
            require_once("Login.php");
            require_once("Alertas.php");
            $login = new Login();
            $alerta = new Alertas();
            
            $login_id = $login->capturarLoginId($login_usuario, $login_contrasena);

            if ($login_id) {
                $alerta->alertaRegistroError();
            }else{
                $this->guardarPersona($persona_nombre, $persona_apellido, $persona_correo, $login_usuario, $login_contrasena);

                $alerta->alertaRegistroExitoso();
            }
            
        }

        public function guardarPersona($persona_nombre, $persona_apellido, $persona_correo, $login_usuario, $login_contrasena){
            
            require_once("../controller/Conexion.php");
            require_once("Login.php");
            $conexion = new Conexion();
            $login = new Login();

            $loginId = $login->capturarLoginIdMasUno();

            if ($loginId == NULL) {
                $loginId = 1;
            }

            $conx = $conexion->conectar();
            $query = "INSERT INTO personas VALUES ('','$persona_nombre','$persona_apellido','$persona_correo',$loginId)";
            mysqli_query($conx,$query) or die ("Insercion persona Fallida en la tabla persona");
            $login->guardarLoginPersona($login_usuario, $login_contrasena);
        }

        public function nombreCompleto($login_usuario, $login_contrasena){
            require_once("../controller/Conexion.php");
            $conexion = new Conexion();

            $conx = $conexion->conectar();
            $query = "SELECT CONCAT(personas.`persona_nombre`,' ',personas.`persona_apellido`) AS 'nombre_completo' FROM personas INNER JOIN login ON personas.login_id = login.login_id WHERE login.login_usuario = '$login_usuario' AND login.login_contrasena = '$login_contrasena'";
            $consulta = mysqli_query($conx,$query);
            $array = mysqli_fetch_array($consulta);

            $nombre_completo = "";
            return $nombre_completo = isset($array['nombre_completo']) ? $array['nombre_completo'] : "" ;
        }

        public function capturarPersonaId($login_usuario, $login_contrasena){
            require_once("../controller/Conexion.php");
            $conexion = new Conexion();

            $conx = $conexion->conectar();
            $query = "SELECT `personas`.`persona_id` FROM `personas` INNER JOIN `login` ON `personas`.`login_id` = `login`.`login_id` WHERE `login`.`login_usuario` = '$login_usuario' AND `login`.`login_contrasena` = '$login_contrasena'";
            $consulta = mysqli_query($conx,$query);
            $array = mysqli_fetch_array($consulta);

            $personaId = "";
            return $personaId = isset($array['persona_id']) ? $array['persona_id'] : "" ;
        }

        //metodos get y set
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($persona_nombre){
            $this->nombre = $persona_nombre;
        }

        public function getApellido(){
            return $this->apellido;
        }
        public function setApellido($persona_apellido){
            $this->apellido = $persona_apellido;
        }

        public function getcorreo(){
            return $this->correo;
        }
        public function setCorreo($persona_correo){
            $this->correo = $persona_correo;
        }

        //metodo toString Override
        public function toString(){
            echo $this->nombre . "<br/>" 
            . $this->apellido . "<br/>" 
            . $this->correo . "<br/>";
         }

    }



?>