<?php
//Morales Coronel Dennis Alejandro - 18270338
    class Persona{
        //Propiedades
        private string $nombre;
        private string $apellidos;
        private int $edad;
        private string $sexo;
        private int $id;
        //Metodos
        public function __construct(
            string $nombre,
            string $apellidos,
            int $edad,
            string $sexo,
            int $id
        ){
            $this->nombre=$nombre;
            $this->apellidos=$apellidos;
            $this->edad=$edad;
            $this->sexo=$sexo;
            $this->id=$id;
        }

        public function getInfo(){
            $info = "Nombre: $this->nombre <br>";
            $info.= "Apellidos: $this->apellidos <br>";
            $info.= "Edad: $this->edad <br>";
            $info.= "Sexo: $this->sexo<br>";
            $info.= "Id: $this->id<br>";
            
            return $info;
        }
    }

    //Instancia de la clase Persona
    $persona1 = new Persona(
        'Dennis',
        'Morales Coronel',
        21,
        'Hombre',
        1
    );
    //echo $persona1->getInfo();
    //echo "<br><br>";
    $persona2 = new Persona(
        'Alejandro',
        'Mora Corona',
        22,
        'Hombre',
        2
    );
    //echo $persona2->getInfo();
?>