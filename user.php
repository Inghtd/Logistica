<?php
session_start();
if(isset($_SESSION['nam'])){
    
    session_unset();


    session_destroy(); 

    //header("Status: 301 Moved Permanently");
    header("Location: ../pantallas/login.php");
    exit;

}else{
    $us=$_POST["username"];
    $ps=$_POST["password"];
    $usuario="prueba";
    $password="12345";
    
    
    if($usuario==$us){

        if($password=="12345"){

            echo "1";
            
            $_SESSION['nam']="Usuario Prueba";
        }else{
            echo "0";
        }
        
    }else{
        echo "0";
    }
}


?>