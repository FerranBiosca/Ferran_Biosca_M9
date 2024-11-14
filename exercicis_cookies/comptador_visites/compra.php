<?php
session_start();


$codi_descompte = $_POST['codi_descompte'];
$descompte_aplicat = 0;


if ($codi_descompte == "BOTIGA20" && $_SESSION['visites'] >= 5) {
    $descompte_aplicat = 20;
} elseif ($codi_descompte == "BOTIGA50" && $_SESSION['visites'] >= 10) {
    $descompte_aplicat = 50;
}
?>


<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Confirmació de Compra</title>
</head>
<body>
    <h1>Confirmació de Compra</h1>
    <?php if ($descompte_aplicat > 0): ?>
        <p>Has aplicat un descompte del <?php echo $descompte_aplicat; ?>% a la teva compra.</p>
    <?php else: ?>
        <p>El codi de descompte no és vàlid o no compleixes els requisits per aplicar-lo.</p>
    <?php endif; ?>
    <a href="comptador_visites.php">Tornar a la botiga</a>
</body>
</html>
