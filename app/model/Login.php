<?php
    //Clase Persona
    class Login{
        //atributos
        protected $usuario;
        protected $contrasena;

        //constructor
        public function __construct(){

        }

        //metodos
        public function guardarLoginPersona($login_usuario, $login_contrasena){

            $this->usuario = $login_usuario;
            $this->contrasena = $login_contrasena;

            require_once("../controller/Conexion.php");
            $conexion = new Conexion();

            $loginId = $this->capturarLoginIdMasUno();

            if ($loginId == NULL) {
                $loginId = 1;
            }
            
            $conx = $conexion->conectar();
            $query = "INSERT INTO login VALUES ($loginId, '$login_usuario', '$login_contrasena')";
            mysqli_query($conx,$query) or die ("Insercion login Fallida en la tabla login");
            
        }

        public function capturarLoginIdMasUno(){
            require_once("../controller/Conexion.php");
            $conexion = new Conexion();

            $conx = $conexion->conectar();
            $query = "SELECT (MAX(login.`login_id`) + 1) AS 'loginmasuno' FROM login";
            $consulta = mysqli_query($conx,$query);
            $array = mysqli_fetch_array($consulta);
            $loginId = "";
            return $loginId = isset($array['loginmasuno']) ? $array['loginmasuno'] : "" ;
            
        }

        public function capturarLoginId($login_usuario, $login_contrasena){
            require_once("../controller/Conexion.php");
            $conexion = new Conexion();

            $conx = $conexion->conectar();
            $query = "SELECT `login`.`login_id` FROM `login` WHERE `login`.`login_usuario` = '$login_usuario' AND `login`.`login_contrasena` = '$login_contrasena'";
            $consulta = mysqli_query($conx,$query);
            $array = mysqli_fetch_array($consulta);

            $loginId = "";
            return $loginId = isset($array['login_id']) ? $array['login_id'] : "" ;
            
        }
        
        public function validarSignIn($login_usuario, $login_contrasena){
            require_once("Alertas.php");
            $alerta = new Alertas();
            
            $login_id = $this->capturarLoginId($login_usuario, $login_contrasena);

            if ($login_id) {
                echo "
                <script type='text/javascript'>
                    window.location.href='../view/index-1.php';
				</script>";
            }else{
                $alerta->alertaSignInError();
            }
            
        }

        //metodos get y set
        public function getUsuario(){
            return $this->usuario;
        }
        public function setUsuario($login_usuario){
            $this->usuario = $login_usuario;
        }

        public function getContrasena(){
            return $this->contrasena;
        }
        public function setContrasena($login_contrasena){
            $this->contrasena = $login_contrasena;
        }

        //metodo toString Override
        function toString(){
            echo $this->usuario . "<br/>" 
            . $this->contrasena . "<br/>";
         }

    }



?>