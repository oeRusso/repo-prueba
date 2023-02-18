<?php

namespace Esteban\Listadodeprofes\models;
use Esteban\Listadodeprofes\libs\Database;
use PDO;

class Profesores extends Database{

    private string $uuid;

    public function __construct(private ?string $nombre,private ?string $apellido,private ?string $asignatura,private ?string $turno){
        $this->uuid= uniqid();

    }

    public function save(){

    }

    public function update(){

    }

    public function delete(){
        
    }

    public static function get($uuid){

        $db =  new Database();
        $query = $db->connect()->prepare('SELECT*FROM profes WHERE uuid = :uuid');
        $query->execute(['uuid'=>$uuid]);

        $notes = new Notes();

        return $notes;
    }

    public static function getAll(){
        $profesores = [];
        $db = new Database();
        $query = $db->connect()->query('SELECT * FROM profes');

        while ($r = $query->fetch(PDO::FETCH_ASSOC)) {
            array_push($profesores, $r);
        }

        return $profesores;
    }


    public function getUUID(): string
        {
            return $this->uuid;
        }

    public function setUUID ($value)
        {
            $this->uuid = $value;
        }


    public function getNombre(): string
        {
            return $this->nombre;
        }

    public function setNombre ($value)
        {
            $this->nombre = $value;
        }


     public function getApellido(): string
        {
            return $this->apellido;
        }

    public function setApellido ($value)
        {
            $this->apellido = $value;
        }


    public function getAsignatura(): string
        {
            return $this->asignatura;
        }

    public function setAsignatura ($value)
        {
            $this->asignatura = $value;
        }


    public function getTurno(): string
        {
            return $this->turno;
        }

    public function setTurno ($value)
        {
            $this->turno = $value;
        }




    


}