<?php
session_start();
$nam="Sign Up";
$action="javascript:cargarDiv('#contenido','pantallas/login.php');";
$page1="#";
$page2="#";
$page3="#";
$fn="Login";

if(isset($_SESSION['nam'])){
    $nam=$_SESSION['nam'];
    $action="javascript:cargarDiv('#contenido','funciones/user.php');";
    $fn="Logout";
    $page1="javascript:cargarDiv('#contenido','pantallas/mapa.php');";
    $page2="javascript:cargarDiv('#contenido','pantallas/tabla.php');";
    $page3="javascript:cargarDiv('#contenido','pantallas/mapa_calor.php');";
}
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Logistica</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="<?php echo $page1; ?>">Mapa Marcas</a></li>
      <li><a href="<?php echo $page2; ?>">Tabla de datos</a></li>
      <li><a href="<?php echo $page3; ?>">Mapa de calor</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $nam; ?></a></li>
      <li><a href="<?php echo $action; ?>"><span class="glyphicon glyphicon-log-in"></span> <?php echo $fn;?></a></li>
    </ul>
  </div>
</nav> 