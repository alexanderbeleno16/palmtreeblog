<?php
    //Clase Persona
    class Entrada{
        //atributos
        protected $titulo;
        protected $imagen;
        protected $descripcion;


        //constructor
        public function __construct(){

        }

        //metodos
        public function guardarEntrada($extension, $ruta_de_la_carpeta, $imagen, $ruta_temporal, $directorio_imagen, $nombre, $txtTitulo, $txtAsunto){

            if ($extension == "jpg" || $extension == "jpeg" || $extension == "jfif" || $extension == "spiff" || $extension == "jng" || $extension == "png" || $extension == "gif" || $extension == "tfif" || $extension == "psd" || $extension == "svg") {

                $directorio_imagen_repetida="";
                $imagen_repetida="";
                $nombre_temporal="";
                $dir="";
                $dir = dir($ruta_de_la_carpeta);
                $i=0;
                $count=0;
                while ($contenido=$dir->read()) {
                    
                    if ($contenido != "." && $contenido != "..") {
                        $i++;

                        if ($imagen==$contenido) {
                            $nombre_temporal = pathinfo($ruta_temporal, PATHINFO_FILENAME);
                            
                            $imagen_repetida = $nombre. "(".$nombre_temporal.")".".".$extension;
                            $directorio_imagen_repetida=$ruta_de_la_carpeta.$imagen_repetida;
                            
                        }
                    }
                }

                if ($imagen_repetida!=NULL) {
                    //SI LA IMAGEN SE REPITE, GUARDO EN LA CARPETA Y EN LA BD
                    if (move_uploaded_file($ruta_temporal,$directorio_imagen_repetida)) {
    
                        $this->insertEntrada($txtTitulo, $txtAsunto, $directorio_imagen_repetida);
    
                        echo "<script type='text/javascript'>
                                    window.location.href='myenters.php';
                                    </script>";
                    }
                    // echo("<pre>");
                    // echo("se repite".var_dump($directorio_imagen_repetida));
                    // echo("</pre>");
                }else {
                    //SI LA IMAGEN (NO) SE REPITE, GUARDO EN LA CARPETA Y EN LA BD
                    if (move_uploaded_file($ruta_temporal,$directorio_imagen)) {
    
                        $this->insertEntrada($txtTitulo, $txtAsunto, $directorio_imagen);
    
                        echo "<script type='text/javascript'>
                                    window.location.href='myenters.php';
                                    </script>";
                    
                    }
                    // echo("<pre>");
                    // echo("No se repite".var_dump($directorio_imagen));
                    // echo("</pre>");
                }
            }else{
                //Alerta extension no permitida
                require_once("Alertas.php");
                $alerta = new ALertas();

                $alerta->alertaExtensionError();
            }
        }

        public function actualizarEntrada($extension, $ruta_de_la_carpeta, $imagen, $ruta_temporal, $directorio_imagen, $nombre, $txtTitulo, $txtAsunto, $entradaId, $img_actual){

            if ($extension == "jpg" || $extension == "jpeg" || $extension == "jfif" || $extension == "spiff" || $extension == "jng" || $extension == "png" || $extension == "gif" || $extension == "tfif" || $extension == "psd" || $extension == "svg") {

                $directorio_imagen_repetida="";
                $imagen_repetida="";
                $nombre_temporal="";
                $dir="";
                $dir = dir($ruta_de_la_carpeta);
                $i=0;
                $count=0;
                while ($contenido=$dir->read()) {
                    
                    if ($contenido != "." && $contenido != "..") {
                        $i++;

                        if ($imagen==$contenido) {
                            $nombre_temporal = pathinfo($ruta_temporal, PATHINFO_FILENAME);
                            
                            $imagen_repetida = $nombre. "(".$nombre_temporal.")".".".$extension;
                            $directorio_imagen_repetida=$ruta_de_la_carpeta.$imagen_repetida;
                            
                        }
                    }
                }

                if ($imagen_repetida!=NULL) {
                    //SI LA IMAGEN SE REPITE, GUARDO EN LA CARPETA Y EN LA BD
                    if (move_uploaded_file($ruta_temporal,$directorio_imagen_repetida)) {
    
                        unlink($img_actual);
                        $this->updateEntrada($txtTitulo, $txtAsunto, $directorio_imagen_repetida, $entradaId);
    
                        echo "<script type='text/javascript'>
                                    window.location.href='myenters.php';
                                    </script>";
                    }
                    // echo("<pre>");
                    // echo("se repite".var_dump($directorio_imagen_repetida));
                    // echo("</pre>");
                }else {
                    //SI LA IMAGEN (NO) SE REPITE, GUARDO EN LA CARPETA Y EN LA BD
                    if (move_uploaded_file($ruta_temporal,$directorio_imagen)) {
    
                        unlink($img_actual);
                        $this->updateEntrada($txtTitulo, $txtAsunto, $directorio_imagen, $entradaId);
    
                        echo "<script type='text/javascript'>
                                    window.location.href='myenters.php';
                                    </script>";
                    
                    }
                    // echo("<pre>");
                    // echo("No se repite".var_dump($directorio_imagen));
                    // echo("</pre>");
                }
            }else{
                //Alerta extension no permitida
                require_once("Alertas.php");
                $alerta = new ALertas();

                $alerta->alertaExtensionError();
            }
        }

        public function updateEntrada($txtTitulo, $txtAsunto, $directorioImg, $entradaId){
            date_default_timezone_set('america/Mexico_City');
            $fecha = date('Y-m-d H:i:s');

            require_once("../controller/Conexion.php");
            $conexion = new Conexion();
            
            $conx = $conexion->conectar();
            $query = "UPDATE entradas SET `entradas`.`entrada_titulo`='$txtTitulo', `entradas`.`entrada_imagen`='$directorioImg', `entradas`.`entrada_descripcion`='$txtAsunto', `entradas`.`entrada_fecha`='$fecha' WHERE `entradas`.`entrada_id` = $entradaId";
            mysqli_query($conx,$query) or die ("Actualizacion / update entrada Fallida en la tabla entrada");
        }

        public function updateEntradaSinImagen($txtTitulo, $txtAsunto, $entradaId){
            date_default_timezone_set('america/Mexico_City');
            $fecha = date('Y-m-d H:i:s');

            require_once("../controller/Conexion.php");
            $conexion = new Conexion();
            
            $conx = $conexion->conectar();
            $query = "UPDATE entradas SET `entradas`.`entrada_titulo`='$txtTitulo', `entradas`.`entrada_descripcion`='$txtAsunto', `entradas`.`entrada_fecha`='$fecha' WHERE `entradas`.`entrada_id` = $entradaId";
            mysqli_query($conx,$query) or die ("Actualizacion / update entrada SIN IMAGEN Fallida en la tabla entrada");
        }

        public function insertEntrada($txtTitulo, $txtAsunto, $directorioImg){
            date_default_timezone_set('america/Mexico_City');
            $fecha = date('Y-m-d H:i:s');

            require_once("../controller/Conexion.php");
            $conexion = new Conexion();
            
            //Acceder a la SESSION
            $personaId = isset($_SESSION['username']['personaId']) ? $_SESSION['username']['personaId'] : "";
            $nombreCompleto = isset($_SESSION['username']['nombreCompleto']) ? $_SESSION['username']['nombreCompleto'] : "";
            
            $conx = $conexion->conectar();
            $query = "INSERT INTO `entradas` values ('','$txtTitulo','$directorioImg','$txtAsunto','$fecha', '$nombreCompleto',$personaId)";
            mysqli_query($conx,$query) or die ("Insercion entrada Fallida en la tabla entrada");
        }

        public function cantidadEntradasGlobales(){
            require_once("../controller/Conexion.php");
            $conexion = new Conexion();

            $conx = $conexion->conectar();
            $query = "SELECT COUNT(`entradas`.`persona_id`) AS cantidadEntradas FROM `entradas` ";
            $consulta = mysqli_query($conx,$query);
            $array = mysqli_fetch_array($consulta);

            $cantidadEntradas = "";
            return $cantidadEntradas = isset($array['cantidadEntradas']) ? $array['cantidadEntradas'] : "" ;
        }

        public function capturarEntradas(){
            require_once("../controller/Conexion.php");
            $conexion = new Conexion();

            $conx = $conexion->conectar();
            $query = "SELECT * FROM entradas ORDER BY `entradas`.`entrada_id` DESC";
            $consulta = mysqli_query($conx,$query);

            return $consulta;
        }

        public function cantidadEntradasPrivadas(){
            require_once("../controller/Conexion.php");
            $conexion = new Conexion();

            //Acceder a la SESSION
            $personaId = isset($_SESSION['username']['personaId']) ? $_SESSION['username']['personaId'] : "";

            $conx = $conexion->conectar();
            $query = "SELECT COUNT(`entradas`.`persona_id`) AS cantidadEntradas FROM `entradas` WHERE `entradas`.`persona_id` = $personaId";
            $consulta = mysqli_query($conx,$query);
            $array = mysqli_fetch_array($consulta);

            $cantidadEntradas = "";
            return $cantidadEntradas = isset($array['cantidadEntradas']) ? $array['cantidadEntradas'] : "" ;
        }

        public function capturarEntradasPrivadas(){
            require_once("../controller/Conexion.php");
            $conexion = new Conexion();

            //Acceder a la SESSION
            $personaId = isset($_SESSION['username']['personaId']) ? $_SESSION['username']['personaId'] : "";

            $conx = $conexion->conectar();
            $query = "SELECT * FROM `entradas` WHERE `entradas`.`persona_id` = $personaId ORDER BY `entradas`.`entrada_id` DESC";
            $consulta = mysqli_query($conx,$query);
            
            return $consulta;
        }

        public function deleteEntrada($entrada_id){
            require_once("../controller/Conexion.php");
            $conexion = new Conexion();

            // echo "el id de la enrtada es=".$entrada_id;
            $conx = $conexion->conectar();
            $query = "DELETE FROM `entradas` WHERE `entradas`.`entrada_id` = $entrada_id";
            return mysqli_query($conx,$query) or die ("Delete / Borrar entrada Fallida en la tabla entrada");
            
        }


        //metodos get y set
        public function getTitulo(){
            return $this->titulo;
        }
        public function setTitulo($entrada_titulo){
            $this->titulo = $entrada_titulo;
        }

        public function getImagen(){
            return $this->imagen;
        }
        public function setImagen($entrada_imagen){
            $this->imagen = $entrada_imagen;
        }

        public function getDescripcion(){
            return $this->descripcion;
        }
        public function setDescripcion($entrada_descripcion){
            $this->descripcion = $entrada_descripcion;
        }

        //metodo toString Override
        public function toString(){
            echo $this->titulo . "<br/>" 
            . $this->imagen . "<br/>" 
            . $this->descripcion . "<br/>";
         }

    }



?>