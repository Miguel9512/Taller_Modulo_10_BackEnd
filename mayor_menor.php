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
    <form action="" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Edad</label>
            <input type="number" name="edad" class="form-control" id="exampleFormControlInput1" placeholder="Digite su edad">
        </div>
        <button type="submit" name="verificar" class="btn btn-outline-info">Operar</button>
    </form>

    <?php

    $edad = 0;
    /* se crean 2 constantes mayoria_edad y sin_edad la primera para definir
    la mayoria de edad y la segunda para que al momento de usar el programa
    si no se tiene una edad minimo de 1 años arroje como resultado No valido*/
    const mayoria_edad = 18;
    const sin_edad = 0;

    if (isset($_POST['verificar'])) {
        $edad = $_POST['edad'];

        /* se cambia la validacion de la edad de un valor
        definido dentro del if por la constante mayoria_edad*/
        if ($edad >= mayoria_edad) {
            /* se cambia etiqueta h1 por h2 en las impresiones en pantalla
            para evitar que se repita la etiqueta h1 mas de 1 vez en la pagina*/
            echo "<h2>Es mayor de edad</h2>";
        }
        #else if (18 > $edad && 0 < $edad) {
        /* se redefine la estructura del if original haciendo uso de las
        constantes de mayoria_edad y sin_edad y haciendolo mas legible
        que de la manera original*/
        else if ($edad < mayoria_edad && $edad > sin_edad) {
            /* se cambia etiqueta h1 por h2 en las impresiones en pantalla
            para evitar que se repita la etiqueta h1 mas de 1 vez en la pagina*/
            echo "<h2>Es menor de edad</h2>";
        }else{
            /* se cambia etiqueta h1 por h2 en las impresiones en pantalla
            para evitar que se repita la etiqueta h1 mas de 1 vez en la pagina*/
            echo "<h2>No valido</h2>";
        }

    }

    ?>

    </div>
</body>
</html>