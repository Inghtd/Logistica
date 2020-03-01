<div class="table-responsive">
  <table class="table">
    <thead>
        <th>Nombre</th>
        <th>Latitud</th>
        <th>Longitud</th>
        <th>Punto</th>
    </thead>
    <tbody>
        <tr>
            <td>Punto 1</td>
            <td>13.705243</td>
            <td>-89.24231</td>
            <td>1</td>
        </tr>

        <tr>
            <td>Punto 2</td>
            <td>13.696674</td>
            <td>-89.197927</td>
            <td>2</td>
        </tr>

        <tr>
            <td>Punto 3</td>
            <td>14.692511</td>
            <td>-87.86136</td>
            <td>3</td>
        </tr>

        <tr>
            <td>Punto 4</td>
            <td>12.022747</td>
            <td>-86.252007</td>
            <td>4</td>
        </tr>

        <tr>
            <td>Punto 5</td>
            <td>8.103289</td>
            <td>-80.596013</td>
            <td>5</td>
        </tr>

        <script>
            function cargarDiv(div,url)
            {
                $(div).load(url);
            }
        </script>

        
    <div class="col-sm-12" id="contenido" load="javascript:cargarDiv('#contenido','pantallas/mapa.php');">
                <?php
                    
                ?>
            </div>

    </tbody>
 </table>
</div> 