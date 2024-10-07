<?php
session_start();

//Verificacion si existe una variable de session llamada post
//y si esta guardada los post en una cookie antes de destruir la session 

if(isset($_SESSION['post'])){
    setcookie('post',json_encode($_SESSION{'post'}), time()+3600);    
}


session_destroy();
header('Location: index.php'); 
exit;

?>
     