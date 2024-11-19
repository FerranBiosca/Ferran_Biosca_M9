<?php
session_start();

if (!isset($_SESSION['cistella'])) {
    $_SESSION['cistella'];
}
elseif (isset($_POST['afegir'])) {
    $_SESSION['cistella']['producte1'] += intval($_POST['producte1']);
    $_SESSION['cistella']['producte2'] += intval($_POST['producte2']);
    header("Location: index.html"); }
elseif (isset($_POST['finalitzar'])) {
    header("Location: resum_compra.php");
}
?>