<?php
session_start();
 if (!isset($_SESSION['username']))  // si no existe la variable de sesión llamada 'username'
 {
     $response["exists"]=false;  // almacenaremos false en la variable de respuesta
 }else{  // en caso de existir la variable de sesión
    $response["exists"]=true;  // almacena true en la variable de respuesta
    $response["username"]=$_SESSION['username']; // almacena el nombre de usuario guardado en la variable
 }    
 header('Content-Type: application/json; charset=utf-8');  // add dthe required header                                          // de sesión $_SESSION['usrname'] en la variable de respuesta
 echo json_encode($response);  // devolverá el contenido de la variable $response (es un array asociativo)

