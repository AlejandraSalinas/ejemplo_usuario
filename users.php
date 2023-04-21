<?php
    //clase
    class Usuario{

        //Atributo
        public $primer_nombre; 
        public $segundo_nombre; 
        public $primer_apellido; 
        public $segundo_apellido;
        public $user_personas; 
        public $password_personas;
       

        //Constructor
        public function __construct($primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $user_personas, $password_personas){
            //inicializando el atributo
            $this-> primer_nombre    = $primer_nombre;
            $this-> segundo_nombre   = $segundo_nombre;
            $this-> primer_apellido  = $primer_apellido;
            $this-> segundo_apellido = $segundo_apellido;
            $this-> user_personas    = $user_personas;
            $this-> password_personas  = $password_personas;
           
        }

        public function getPrimerNombre()
        {
            //Retomando el atributo primer_nombre.
            return $this -> primer_nombre;
        }
        public function setPrimerNombre($nuevo_primer_nombre)
        {
            //Asignando el valor que  llegoa por el perimetro: $nuevo_nombre al atributo:primer_nombre;
            return $this-> primer_nombre = $nuevo_primer_nombre; 
        } 
        public function getsegundoNombre()
        {
            return $this -> segundo_nombre;
        }
        public function setSegundoNombre($nuevo_segundo_nombre)
        {
            return $this-> segundo_nombre = $nuevo_segundo_nombre; 
        }
        public function getPrimerApellido()
        {
            return $this -> primer_apellido;
        }
        public function setPrimerApellido($nuevo_primer_apellido)
        {
            return $this->primer_apellido = $nuevo_primer_apellido; 
        }
        public function getSegundoApellido()
        {
            return $this -> segundo_apellido;
        }
        public function setSegundoApellido($nuevo_segundo_apellido)
        {
            return $this->segundo_apellido = $nuevo_segundo_apellido; 
        }            
        public function getUsuario_Personas()
        {
            return $this -> user_personas;
        }
        public function setUsuario_Personas($nuevo_user_per)
        {
            return $this-> user_personas = $nuevo_user_per; 
        }   
        public function getPassword_Personas()
        {
            return $this -> password_personas;
        }
        public function setPassword_Personas($nuevo_pass_p)
        {
            return $this-> password_personas = $nuevo_pass_p; 
        }  
        public function getIniciarSeción()
        {
            if ($this-> user_personas ===  $this-> password_personas)
            {            
                return true;
            }else {
                echo "Usuario y contraseña incorrecta";
            }
        }  
        //Métodos propios
        public function getNombreCompleto(){
           return $this->primer_nombre. " " . $this->segundo_nombre . " " . 
            $this->primer_apellido . " " . $this->segundo_apellido . " " . $this-> user_personas . " " . $this-> password_personas;
        }
    }    
        // Comiendo de la sesión
        session_start();
        // Guardar datos de sesión
        $_SESSION["Usuario"] = "Maira";

        echo "Sesión iniciada y establecido nombre de usuario!" . "<br>";
        ?>
        <a href="views.php"></a>

  
    
