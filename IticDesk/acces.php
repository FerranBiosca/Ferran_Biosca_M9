<?php 
session_start(); 
if(! isset($_SESSION['log'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<body style="background-color: #A9F5F2;">
    <h1 style="color: #333; text-align: center; font-size: 36px; margin-bottom: 20px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);">
	    Hola, benvingut
<?php echo $_SESSION['user_login']; ?>
    </h1>
<a href=./registre_incidencies.php>Si vols registrar alguna incidència, fes click aquí</a><br>
<a href=./incidencies.php>Si vols consultar les incidències, fes click aquí</a>
<form action="logout.php" method="post">
<input type="submit"  name="logout" value="Logout">
</form>	

</body>
</html>