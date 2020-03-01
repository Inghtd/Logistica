
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
        <link href="/recursos/stylo.css" rel="stylesheet">

        <script>
            function cargarDiv(div,url)
            {
                $(div).load(url);
            }
        </script>

    </head>

    <body>
        <div class="row">
            <div class="col-sm-1"></div>

            <div class="col-sm-10">
                <?php
                include("recursos/menu.php");
                ?>
            </div>

            <div class="col-sm-1"></div>
        </div>

        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10" id="contenido">
                <?php
                    
                ?>
            </div>
            <div class="col-sm-1"></div>
        </div>


    </body>
</html>