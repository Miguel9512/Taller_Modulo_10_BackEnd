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
    <!-- Se Cambia el Titulo de la pagina de XXXX por el nombre correspondiente a la actividad-->
    <title>Calculadora exacta de edad</title>
</head>
<body>
    <a href="index.html#section-respuestas">
        <!--Se agrega descripción de imagen en atributo alt es cual se encontraba vacio-->
        <img class="home" src="img/hogar.png" alt="Haga clic para volver al inicio">
    </a>
    
    <div class="main-frame-cal">
    <!--Se realiza 2 correcciones agregando atributos action y method ya
    que sus valores se encontraban sin su correespondientes atributos.-->
    <form action="" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Seleecione su fecha de nacimiento:</label>
            <input type="date" name="fecha_nacimiento" class="form-control" id="exampleFormControlInput1">
        </div>
        <!--Se realiza corrección agregando atributo type ya que el
        valor "submit" se encontraba sin su correespondiente atributo.-->
        <button type="submit" name="verificar" class="btn btn-outline-info">Evíar</button>
    </form>

    <?php

    const mayoria_edad = 18;
    const sin_edad = 0;    

    if (isset($_POST['verificar'])) {
        $fecha = new DateTime($_POST['fecha_nacimiento']);
       
        $date2 = new DateTime(date("y-m-d"));

        $fecha_actual = $fecha->diff($date2);

        $edad_actual = $fecha_actual->y;
        $edad_meses = $fecha_actual->m;
        $edad_dias = $fecha_actual->d;


        if ($edad_actual >= mayoria_edad) {
            /* se cambia etiqueta h1 por h2 en las impresiones en pantalla
            para evitar que se repita la etiqueta h1 mas de 1 vez en la pagina*/
            echo "<h2>Es mayor de edad, dado que tiene " .$edad_actual. " años </h2>";
            echo "<br> Su edad exacta es: <br>".$edad_actual." años, ".$edad_meses." meses y ".$edad_dias." dias.";
        }
        /* se deja la comparacion de la variable edad_dias con la constante sin_edad
        ya que en este ejercicio a diferencia del ejercicio 2 que valida la mayoria de
        edad este al validar la edad exacta la persona puede no tener 1 año de edad cumplido
        pero puede tener meses o dias cumplidos, igualmente no permite poner fechas a futuro
        ya que tomara la ruta del else No valido*/
        else if ($edad_actual < mayoria_edad && $edad_dias > sin_edad) {
            /* se cambia etiqueta h1 por h2 en las impresiones en pantalla
            para evitar que se repita la etiqueta h1 mas de 1 vez en la pagina*/
            echo "<h2>Es menor de edad, dado que tiene " .$edad_actual. " años </h2>";
            echo "<br> Su edad exacta es: <br>".$edad_actual." años, ".$edad_meses." meses y ".$edad_dias." dias.";
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