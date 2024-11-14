<?php
session_start();


$majoredat = isset($_COOKIE['majoredat']) ? $_COOKIE['majoredat'] : '';
$idioma = isset($_COOKIE['idioma']) ? $_COOKIE['idioma'] : '';
$moneda = isset($_COOKIE['moneda']) ? $_COOKIE['moneda'] : '';


$missatge = '';


if ($majoredat == 'no') {
    if ($idioma == 'catala') {
        $missatge = "No et podem vendre alcohol si ets menor d’edat.";
    } elseif ($idioma == 'espanyol') {
        $missatge = "No podemos venderte alcohol si eres menor de edad.";
    } elseif ($idioma == 'angles') {
        $missatge = "We cannot sell you alcohol if you are underage.";
    }
} else {
    if ($idioma == 'catala') {
        if ($moneda == 'euro') {
            $missatge = "T’oferim el vi “Les Terrasses” a un preu de 39 €.";
        } elseif ($moneda == 'lliura') {
            $missatge = "T’oferim el vi “Les Terrasses” a un preu de 33 £.";
        } elseif ($moneda == 'dolar') {
            $missatge = "T’oferim el vi “Les Terrasses” a un preu de 45 $.";
        }
    } elseif ($idioma == 'espanyol') {
        if ($moneda == 'euro') {
            $missatge = "Te ofrecemos el vino “Les Terrasses” a un precio de 39 €.";
        } elseif ($moneda == 'lliura') {
            $missatge = "Te ofrecemos el vino “Les Terrasses” a un precio de 33 £.";
        } elseif ($moneda == 'dolar') {
            $missatge = "Te ofrecemos el vino “Les Terrasses” a un precio de 45 $.";
        }
    } elseif ($idioma == 'angles') {
        if ($moneda == 'euro') {
            $missatge = "We offer you the wine “Les Terrasses” at a price of 39 €.";
        } elseif ($moneda == 'lliura') {
            $missatge = "We offer you the wine “Les Terrasses” at a price of 33 £.";
        } elseif ($moneda == 'dolar') {
            $missatge = "We offer you the wine “Les Terrasses” at a price of 45 $.";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Informació de la Bodega</title>
</head>
<body>
    <h1>Informació de la Bodega</h1>
    <p><?php echo $missatge; ?></p>
    <a href="bodega.php">Tornar a la pàgina principal</a>
</body>
</html>
