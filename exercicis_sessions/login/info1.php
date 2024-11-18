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
        <title>Informació 1</title>
    </head>
    <body>
        <h2>Benvingut, <?php echo $_SESSION['usuari']; ?>! </h2>
        <p>Aquesta és la pàgina d'informació 1.</p>
        <a href="info2.php">Anar a la pàgina d'informació 2</a>
    </body>
</html>