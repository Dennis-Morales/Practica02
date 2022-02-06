<?php
//Morales Coronel Dennis Alejandro - 18270338
    require 'Persona.php';
    class Alumno extends Persona{
        private string $carrera;
        private int $semestre;
        private string $num_control;

        public function __construct(
            $nombre,
            $apellidos,
            $edad,
            $sexo,
            $id,
            string $carrera,
            int $semestre,
            string $num_control
        ){
            parent::__construct($nombre,$apellidos,$edad,$sexo,$id);
            $this->carrera=$carrera;
            $this->semestre=$semestre;
            $this->num_control=$num_control;
        }

        public function getInfo(){
            echo parent::getinfo();
            $info = "Carrera: $this->carrera <br>";
            $info.= "Semestre: $this->semestre <br>";
            $info.= "Num. Control: $this->num_control <br>";
            return $info;
        }
    }

    $alumno1 = new Alumno(
        'Dennis Alejandro',
        'Morales Coronel',
        21,
        'Hombre',
        1,
        'Ing. Sistemas Computacionales',
        8,
        '18270338'
    );
    echo $alumno1->getInfo();
?>