<?php
/*  
---- VALIDA USERNAME ----
- Que el campo no esté vacío
- Que el campo no tenga menos de 3 cc
- Que el campo no sea un numero
- No debe contener cc especiales
- Si todo OK se limpia el campo
*/




/*
---- VALIDA PASSWORD ----
- Que el campo no esté vacío
- Que la contraseña tenga min 8cc
- Que contenga numeros y letras
-- Si todo OK se limpia
*/

/*
---- SANEAR ----
*/


// procValidaciones.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Encriptar la contraseña usando password_hash
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // A partir de aquí, puedes guardar $hashedPassword en la base de datos
    // y compararlo más tarde con password_verify al iniciar sesión.

    echo "Usuario: " . htmlspecialchars($usuario) . "<br>";
    echo "Contraseña encriptada: " . $hashedPassword;
}
?>
