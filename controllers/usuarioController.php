<?php

//lamada al modelo
require_once '../models/usuario.php';

class UsuarioController{

//vamos a guardar los datos del usuario

public function save(){

    if(isset($_POST)){

     

        $usuario = new Usuario();

        //comprobamos que todos los datos existen funcion cardinal llega a ser un if en una linea
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
        $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
        $email = isset($_POST['email']) ? $_POST['email'] : false;
        $password = isset($_POST['password']) ? $_POST['password'] : false;


        //si todos existen llamamos al objeo usuario que las propiedades y se las pasamos
        if($nombre && $apellidos && $email && $password){
            $usuario->setNombre($nombre);
            $usuario->setApellidos($apellidos);
            $usuario->setEmail($email);
            $usuario->setPassword($password);
            $save = $usuario->save();//guardamos nuestro metodo en una variable
        //el metodo en este if hace boolean y si los datos estan correctos o no los dira al completar el registro

            if($save){
                echo "el registro fue completado con exito";
            }else{
                echo "el registro no pudo ser completado";
            }
        }else{//si se introduce algo en blanco saltará que el usuario no ha introducido al correctamente
            echo "Algunos datos no fueron introducidos correctamente";
        }
    }
}

}





?>