<?php

    function conectar(){

        $bd="proyecto_login";
        $user="root";
        $passwd="30891b92";

        try {
            $conexion = new PDO("mysql:host=localhost;dbname=$bd, $user, $passwd");
            return $conexion;
        } catch (PDOException $err) {
            print("Error al conectar a la base de datos: " . $err->getMessage());
        }
    }

    $conexion = conectar();