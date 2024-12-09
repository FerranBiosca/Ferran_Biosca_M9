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
<h2>Descomptes/h1>
<h2>Per cada dos ordinadors que compris tens un 50% de descompte</h2>
<h2>Per cada dos mobils que compris tens un 50% de descompte</h2>
<h2>Per cada dos televisions que compris tens un 50% de descompte</h2>
<h2>Per cada dos mobils que compris tens un 50% de descompte</h2>
<a href=./login_correcte.php>Per anar a la pàgina d'inici fes click aquí</a>
</body>
</html>