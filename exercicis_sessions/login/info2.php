<?php
session_start();

if (!isset($_SESSION['usuari'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ca">
    <head>
        <title>Informació 2</title>
    </head>
    <body>
    <h2>Benvingut, <?php echo $_SESSION['usuari']; ?>!</h2>
    <p>Aquesta és la pàgina d'informació 2.</p>
    <a href="info1.php">Tornar a la pàgina d'informació 1</a>
    </body>
</html>