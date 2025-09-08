<?php
 class Conexion{
     public static function Conectar(){
         define('server','localhost');
         define('database','db_outsourcing');
         define('user','outsourcing');
         define('password','outsourcing2025');         
         $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
         
         try{
            $conexion = new PDO("mysql:host=".server.";dbname=".database, user, password, $options);             
            return $conexion; 
         }catch (Exception $e){
             die("El error de Conexión es :".$e->getMessage());
         }         
     }
 }
?>