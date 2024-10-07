<?php
session_start(); //Iniciar la sesion para poder acceder a los datos del usario.

//Verificar si el usuario esta logueado
if(!isset($_SESSION['user'])||empty($_SESSION['user'])){
   header('location:index.php');
   exit;
}

//inciar el arreglo de post si alguna session existe
if(!isset($_SESSION['post'])){
    $_SESSION['post']=[];
}

if($_SERVER['request_method'] == 'POST'){
    if(isset($_POST['titulo']) && isset($_POST['contenido'])){
        $titulo =$_POST['titulo'];
        $contenido =$_POST['contenido'];
    } else {
        echo"porfavor asegurarse de enviar los datos";
    }   

    

    //verificar que los campos no esten vacidos
    if (!emapaty($titulo)&& !empty($contenido)){
        $autor=$_SESSION['user']['name'];   
    
        //Crear un nuevo post como arreglo con el titulo
        $nuevo_post=[
            'titulo'=> $titulo,
            'Contenido'=> $contenido,
            'autor'=> $autor,
        ];
        
        //Guardar el nuevo post 

        $_SESSION['post'][] = $nuevo_post;

        //mostra un formulario con un boton para ver todas las publicaciones
        echo'<from action= "ver_post.php" method="post">';  
        echo'<input type= "submit" values="ver post">';
        echo'<from">';
        exit;
    }else{
        //SI LOS CAMPOS ESTAN VACIOS, MOSTRAR MENSAJE DE ERROR
        echo"Todos los campos tienen que estar llenos";
    }
}
?>


<DOCTYPE html>
<html>    
<head>

 <title>Crear post</title>
    
</head>
<body>
    <h1>Crear post nuevo</h1>
    <form action="nuevo_post.php" method="post">
        <label>Titulo</label>
        <input type="text" name="Titulo" required>
        <br><br>

        <label for=""></label>
        <textarea name="Contenido" required></textarea>

        <input type="submit" value="Publicar">

    </form>

</body>
</html>



