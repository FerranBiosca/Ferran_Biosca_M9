<?php 
session_start(); 
if(! isset($_SESSION['log'])){
    header("Location: index.html");
}
?>

<!DOCTYPE html>
<html>
<body style="background-color: #A9F5F2;">
    <h1 style="color: #333; text-align: center; font-size: 36px; margin-bottom: 20px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);">
	    Benvingut a la pàgina de productes 2
    </h1>
<h2>Productes</h1>
<h2>Televisio ......... Preu: 200 euros</h2>
<h2>Tableta ........... Preu: 75 euros</h2>
<a href=./tenda1.php>Si vols veure més productes fes click aquí</a><br>
<a href=./descomptes.php>Si vols veure els descomptes fes click aquí</a>
</body>
</html>
