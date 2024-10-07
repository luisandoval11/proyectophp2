<?php
session_start(); //Iniciar la sesion para poder acceder a los datos del usario.

//Verificar si el usario esta logueado
if(!isset($_SESSION['user'])||empty($_SESSION['user'])){
   header('location:index.php')
   exit;
}

if(!isset($_SESSION['user'])&&empty($_SESSION['user'])){
    echo"<h1>post creado</h1>"

    foreach ($_SESSION['post'] as $post){
        // mostrar el titulo del post reciente.
        echo <h2>{$post['titulo']}</h2>
        // mostrar el contenido del post reciente
        echo <h2>{$post['contenido']}</h2>
    }
} else{
    //si no hay post creado

    echo"No hay nuevos post crados";

}
?>

<DOCTYPE html>
<html>    
<head>

 <title>Ver post</title>
    
</head>
<body>
   <a href="welcome.php">Regresar al inicio </a>
</body>
</html>


