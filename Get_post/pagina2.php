<?php
session_start();
if (
    isset($_SESSION['user']) &&
    !empty($_SESSION['user'])
) {
    echo "BIENVENID@: {$_SESSION['user']} desde la página 2<br>";
} else {
    header('Location: index.php');
}
include './inclides/footer.php';