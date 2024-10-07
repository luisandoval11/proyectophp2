<?php
session_start();//Aqui podemos inicia una nueva sesion o seguir con la sesion ya iniciada.



 /*Optener los datos del formulario por POST*/
if (
    isset($_SESSION['user']) and !empty($_SESSION['user'])
) {
    // Mostramos los datos del formulario
    echo "BIENVENID@: {$_SESSION['user']['name']} <br>";
} else {
    // redirigir a la página de inicio
    header('Location: index.php');
    exit;
}
?>

<!-- Formulario para crear el nuevo post--> 
<form action="nuevo_post.php" method="POST">
    <input type="submit" value="Crear nuevo post">
</form>

<!-- formulario para bloquear y cerrar sesion --> 
<form action="bloqueado.php">
    <input type="submit" value="Bloqueado">
    
</form>


<form action="index.php" method="post">
    <input type="submit" value="Cerrar sesión">
</form>


