<?php
    //Clase alertas 
    class Alertas{
        //atributos

        //constructor
        public function __construct(){
            
        }
        
        //metodos
        public function alertaRegistroError(){
            echo("
           <script type='text/javascript'>
                Swal.fire({
                    position: 'bottom-end',
                    icon: 'error',
                    title: 'Error 😩',
                    text: 'El usuario o contrasena ya existen. Intenta con uno nuevo.',
                    showConfirmButton: false,
                    timer: 6500
                })
            </script>
           ");
        }

        public function alertaRegistroExitoso(){
            echo("
           <script type='text/javascript'>
                Swal.fire({
                    position: 'bottom-end',
                    icon: 'success',
                    title: 'Datos guardados con exito! 🥳',
                    text: 'Proceso exitoso! ',
                    showConfirmButton: false,
                    timer: 6500
                })
            </script>
           ");
        }

        public function alertaSignInError(){
            echo("
           <script type='text/javascript'>
                Swal.fire({
                    position: 'bottom-end',
                    icon: 'error',
                    title: 'Error 😩',
                    text: 'El usuario o contrasena no existen. Intenta nuevamente.',
                    showConfirmButton: false,
                    timer: 6500
                })
            </script>
           ");
        }

        public function alertaExtensionError(){
            echo("
           <script type='text/javascript'>
                Swal.fire({
                    position: 'bottom-end',
                    icon: 'info',
                    title: 'Extension de archivo no permitida.🤔',
                    text: 'La extension que adjuntó, no esta permitida',
                    showConfirmButton: false,
                    timer: 6500
                })
            </script>
           ");
        }

    

    }



?>