<?php
//llamamos a la base de datos el require es como un import en java
require_once '../config/db.php';
class Usuario{

    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $db;

    //constructor donde inicializamos el método conexion para usarlo despues
    public function __construct(){
        $this->db = Database::connect();
    }

    //métodos getter && setter
    function getId(){
        return $this->id;
    }
    function getNombre(){
        return $this->nombre;
    }
    function getApellidos(){
        return $this->apellidos;
    }
    function getEmail(){
        return $this->email;
    }
    //añadir el real escape permite que las consultas escapen de caracteres extraños y haga tener mayor seguridad al formulario
    function getPassword(){
        return password_hash($this->db->real_escape_string($this->password),PASSWORD_BCRYPT,['cost' => 4]);
    }

    function setNombre($nombre){
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setApellidos($apellidos){
        $this->apellidos = $this->db->real_escape_string($apellidos);
    }

    function setEmail($email){
        $this->email = $this->db->real_escape_string($email);
    }

    //no es necesario real_escape ya que tiene su propia seguridad de codificacion y la contraseña esta oculta
    function setPassword($password){
        $this->password = $password;
    }

    //métodos
    public function save(){
        $sql = "INSERT INTO usuarios VALUES(NULL,'{$this->getNombre()}','{$this->getApellidos()}','{$this->getEmail()}','{$this->getPassword()}')";
        $save = $this->db->query($sql);
        $result = false;

        if($save){
            $result = true;
        }
        return $result;
    }

    




}



?>