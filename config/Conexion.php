<?php
$host ="localhost";
$user ="root";
$pass="";
$db="ecomerce";

$conexion = new mysqli($host,$user,$pass,$db);
if (!$conexion) {
   echo 'conexion fallida';
}