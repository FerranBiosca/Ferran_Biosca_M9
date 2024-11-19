<?php
session_start();

if (!isset($_SESSION['cistella'])) {
    header("Location: index.html");
    exit();
}

$producte1 = $_SESSION['cistella']['producte1'];
$producte2 = $_SESSION['cistella']['producte2'];
$total = ($producte1 * 10) + ($producte2 * 20);
?>

<!DOCTYPE html>
<html lang="ca">
    <head>
        <title>Resum de la Compra</title>
    </head>
    <body>
        <h1>Resum de la Compra</h1>
        <p>Producte 1: <?php echo $producte1; ?> unitats</p>
        <p>Producte 2: <?php echo $producte2; ?> unitats</p>
        <p>Total: <?php echo $total; ?>€</p> <form action="confirmar_compra.php" method="post"> <input type="submit" value="Confirmar compra"> </form>
    </body>
</html>