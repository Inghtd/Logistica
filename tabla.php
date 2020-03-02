
	<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
 
		<!-- Acción sobre el botón con id=boton y actualizamos el div con id=capa -->
		<script>
            function cargarDiv(div,url)
            {
                $(div).load(url);
            }
        </script>

<div class="table-responsive">
    <h1>Tablas de usuarios</h1>
  <table class="table">
    <thead>
        <th class="active">Nombre</th>
        <th class="active">Latitud</th>
        <th class="active">Longitud</th>
        <th class="active">Punto</th>
        <th class="active"><span class="glyphicon glyphicon-search"></span></th>
    </thead>
    <tbody>
        <tr class="active">
            <td>Punto 1</td>
            <td>13.705243</td>
            <td>-89.24231</td>
            <td>1</td>
            <td><a href="javascript:cargarDiv('#mapa','funciones/mapas.php?nam=Punto1&lat=13.705243&log=-89.24231');">
                    <span class="glyphicon glyphicon-search btn btn-default btn-sm"></span>
                </a>
            </td>
        </tr>

        <tr class="active">
            <td>Punto 2</td>
            <td>13.696674</td>
            <td>-89.197927</td>
            <td>2</td>
            <td><a href="javascript:cargarDiv('#mapa','funciones/mapas.php?nam=Punto2&lat=13.696674&log=-89.197927');">
                    <span class="glyphicon glyphicon-search btn btn-default btn-sm"></span>
                </a>
            </td>
        </tr>

        <tr class="active">
            <td>Punto 3</td>
            <td>14.692511</td>
            <td>-87.86136</td>
            <td>3</td>
            <td><a href="javascript:cargarDiv('#mapa','funciones/mapas.php?nam=Punto3&lat=14.692511&log=-87.86136');">
                    <span class="glyphicon glyphicon-search btn btn-default btn-sm"></span>
                </a>
            </td>
        </tr>

        <tr class="active">
            <td>Punto 4</td>
            <td>12.022747</td>
            <td>-86.252007</td>
            <td>4</td>
            <td><a href="javascript:cargarDiv('#mapa','funciones/mapas.php?nam=Punto4&lat=12.022747&log=-86.252007');">
                    <span class="glyphicon glyphicon-search btn btn-default btn-sm"></span>
                </a>
            </td>
        </tr>

        <tr class="active">
            <td>Punto 5</td>
            <td>8.103289</td>
            <td>-80.596013</td>
            <td>5</td>
            <td><a href="javascript:cargarDiv('#mapa','funciones/mapas.php?nam=Punto5&lat=8.103289&log=-80.596013');">
                    <span class="glyphicon glyphicon-search btn btn-default btn-sm"></span>
                </a>
            </td>
        </tr>
    </tbody>
 </table>
</div> 

<div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10" id="mapa">
                <?php
                    
                ?>
            </div>
            <div class="col-sm-1"></div>
        </div>