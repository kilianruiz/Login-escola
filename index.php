<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./scripts/script.js"></script>
</head>
<body>
        <form method="POST" action="./validaciones_php/procValidaciones.php" class="login">
            <h4>Iniciar sesión</h4>
                <input type="text" name="usuario" id="usuario">
            <p class="error" id="error_user"></p> 
            <br>
                <input type="password" id="password" name="password">
            <p class="error" id="error_psswd"></p>
                <button type="submit" value="ENTRAR">Iniciar sesión</button>
        </form>   
</body>
</html>