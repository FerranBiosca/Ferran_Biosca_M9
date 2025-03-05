<?php
session_start();
$_SESSION['id_session']=$usuari;
echo $_SESSION['id_session'];
?>

<!DOCTYPE html>
<html>
<body style="background-color: #A9F5F2;">
    
<form action="query.php" method="Post">
    <input placeholder="Escriu una puntuació" type="text" name="titol" id="">
    <input type="submit" value="ENVIAR">
</form>
 
<input type="submit"  name="logout" value="Logout">
</form>	

</body>
</html>