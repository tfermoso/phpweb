<?php
session_start();
if(isset($_SESSION["user"])){
    $email=$_SESSION["user"];
    $datos=$_SESSION["datos"];
    echo $email . " " . $datos;
}else{
    header("Location: ./");
}