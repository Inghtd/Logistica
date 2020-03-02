
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Logistica</title>
         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

        <!--Hoja de estilo multi funcion-->
        <link href="recursos/stylo.css" rel="stylesheet">

        <script>
            function cargarDiv(div,url)
            {
                $(div).load(url);
            }
        </script>

    </head>

    <body>
        <div class="row">
            <!---div class="col-sm-1"></div-->

            <div class="col-sm-12">
                <?php
                include("recursos/menu.php");
                ?>
            </div>

            <!--div class="col-sm-1"></div-->
        </div>

        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10" id="contenido">
                <?php
                    
                    if(isset($_SESSION['nam'])){
                        ?>
                            <h1 class="solo">Bienvenido a la aplicación de logística.</h1>
                            <h2 class="solo">para la prueba son un total de tres pantallas, 
                                las cuelas se pueden visualizar intercambiándolas entre sí por 
                                medio del menú de la parte superior. </h2>
                            <h3 class="solo">La primer apantalla es un mapa de marcas de ubicación 
                                de los puntos que fueron proporcionados previamente.<br>
                                Luego tenemos la segunda ventana e suan tabla 
                                con la cual en al parte inferior podemos 
                                buscar casa un de los puntos por separada.<br>
                                La ultima pantalla es un simple mapa de calor
                                el cual puede ser visualizado, además de cambiar 
                                algunas de las configuraciones básicas.<br>
                                </h3>


                        <?php
                    }else{
                        ?>
                            <h1 class="solo">Bienvenido a la aplicación de logística.</h1>
                            <h2 class="solo">Para poder utilizar las características debes de ingresar el <br>
                                Usuario: prueba <br>
                                Contraseña: 12345 </h2>
                            <h3 class="solo">Para el desarrollo de esta prueba se utilizaron diferentes elementos <br>
                                PHP como lenguaje de programación, 
                                Boostrap para que fuera responsivo, 
                                Javascript para algunos elementos, 
                                así como un poco de Ajax, 
                                al igual que la librería de Google maps.</h3>


                        <?php
                    }
                ?>
            </div>
            <div class="col-sm-1"></div>
        </div>


    </body>
</html>