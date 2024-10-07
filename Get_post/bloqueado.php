<?php
session_start();

if(isset($_SESSION['user'])){
    ?>

    <DOCTYPE html>
    <html>    
    <head>

    <title>Sesion bloqueado</title>
        
    </head>
    <body>
    <h1>Desbloquear sesion</h1>
        <form action="bloqueado.php" method="post">
            <label>Contraseña</label>
            <input type="password" name="password" required >
            <br><br>
            <input type="submit" values="Desbloquear">
        </form>

    </body>
    </html>
    <?php
} else {
    header('location:index.php');
    exit;
}

if(isset($_POST['password'])&& empty($_POST['password'])){

    if($password=$_SESSION['user']['password']){
        header('location:welcome.php');
        exit;
    } else{

        echo"usuarios o contraseña incorrecta";
    }

}
?>











