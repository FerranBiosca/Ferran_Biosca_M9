<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    setcookie('majoredat', $_POST['majoredat'], time() + (86400 * 30), "/");
    setcookie('idioma', $_POST['idioma'], time() + (86400 * 30), "/");
    setcookie('moneda', $_POST['moneda'], time() + (86400 * 30), "/");
    header("Location: info.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Bodega</title>
</head>
<body>
    <h1>Benvingut a la nostra bodega!</h1>
    <form method="post" action="">
        <label for="major_edat">Ets major d'edat?</label><br>
        <input type="radio" id="si" name="majoredat" value="si" required> Sí<br>
        <input type="radio" id="no" name="majoredat" value="no" required> No<br><br>


        <label for="idioma">Selecciona l'idioma:</label><br>
        <select id="idioma" name="idioma" required>
            <option value="catala">Català</option>
            <option value="espanyol">Espanyol</option>
            <option value="angles">Anglès</option>
        </select><br><br>


        <label for="moneda">Selecciona la moneda:</label><br>
        <select id="moneda" name="moneda" required>
            <option value="euro">Euro</option>
            <option value="lliura">Lliura</option>
            <option value="dolar">Dolar</option>
        </select><br><br>


        <button type="submit">Enviar</button>
    </form>
</body>
</html>
