<?php
session_start();

if (!isset($_SESSION['visites'])) {
    $_SESSION['visites'] = 0;
}

$descompte = 0;
$missatge_descompte = "";

if ($_SESSION['visites'] >= 10) {
    $descompte = 50;
    $missatge_descompte = "Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga";
} elseif ($_SESSION['visites'] >= 5) {
    $descompte = 20;
    $missatge_descompte = "Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga";
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Comptador de Visites</title>
</head>
<body>
    <h1>Benvingut a la nostra botiga!</h1>
    <p>Has visitat aquesta pàgina <?php echo $_SESSION['visites']; ?> vegades.</p>
    
    <?php if ($descompte > 0): ?>
        <p><?php echo $missatge_descompte; ?></p>
    <?php endif; ?>

    <form action="compra.php" method="post">
        <label for="codi_descompte">Codi de descompte:</label>
        <input type="text" id="codi_descompte" name="codi_descompte">
        <button type="submit">Comprar</button>
    </form>
</body>
</html>

