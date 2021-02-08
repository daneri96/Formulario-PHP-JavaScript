<?php


class Database{

    //método estatico para poder usar la conexion de base datos donde queramos
    public static function connect(){
        $db = new mysqli('localhost','daneri96','registro','registros');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }

}





?>