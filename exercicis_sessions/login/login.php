<?php
session_start();

$usuari = $_POST["usuari"];
$contrasenya = $_POST["contrasenya"];

if ($usuari == $contrasenya) {
    $_SESSION['usuari'] = $usuari;
    header("Location: info.php");
}
else {
    header("Location: index.html");
}
?>