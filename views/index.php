<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf-8"/>
    <title>Formulario de registro</title>
</head>

<body>
    <h2>Formulario Registro</h2>
        <form  action="../controllers/controller.php"  method="POST">
            nombre:<input id="nombre" type="text" name="nombre"/><img id="validadoNombre"/><br>
            apellidos:<input type="text" name="apellidos" id="apellidos" > <img  id="validadoApellido"/><br>  
            email:<input type="text" name="email" id="email"><img  id="validoEmail"/><br>
            password:<input type="password" name="password" id="password" ><img  id="validoPassword"/><br>
            <input type="submit" value="Registrar" id="validar"/>
        </form>
        <script src="../js/validacion.js"></script>

</body>


</html>