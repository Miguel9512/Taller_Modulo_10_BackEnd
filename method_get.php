<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Se agrega hoja de estilos .css general usada en todos los puntos del taller.-->
    <link rel="stylesheet" href="css/general.css">
    <title>Mayor o menor de edad</title>
</head>
<body>
<a href="index.html#section-respuestas">
        <!--Se agrega descripción de imagen en atributo alt es cual se encontraba vacio-->
        <img class="home" src="img/hogar.png" alt="Haga clic para volver al inicio">
    </a>
    <div class="main-frame-cal">
    <!--Se realiza corrección indicandole al formulario que debe enviar la info contenida
    dentro del mismo por medio del metodo GET y no por por medio del metodo POST
    como se encontraba inicialmente-->
    <form action="" method="GET">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Por Favor Ingrese su Nombre">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Apellido</label>
            <input type="text" name="apellido" class="form-control" id="exampleFormControlInput1" placeholder="Por Favor Ingrese su Apellido">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Cédula</label>
            <input type="text" name="cc" class="form-control" id="exampleFormControlInput1" placeholder="Por Favor Ingrese su Numero de Cédula">
        </div>
        <button type="submit" name="verificar" class="btn btn-outline-info">Evíar</button>
    </form>

    <?php

    $edad = 0;
    
    if (isset($_GET['verificar'])) {
        $nombre = $_GET['nombre'];
        /*Se realiza corrección llamando a la informacion contenida dentro de 'apellido' por medio
        del metodo GET y no por por medio del metodo POST como se encontraba inicialmente*/
        $apellido = $_GET['apellido'];
        $cedula = $_GET['cc'];
    
        echo "El Nombre Registrado es: ".$nombre."<br>";
        echo "El Apellido Registrado es: ".$apellido."<br>";
        echo "La Cédula Registrada es: ".$cedula."<br>";

    }

    ?>

    </div>
</body>
</html>