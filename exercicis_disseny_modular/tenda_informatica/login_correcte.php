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
	    Hola, benvingut 
<?php echo $_SESSION['user_login']; ?>
    </h1>
<h1>Informació dels productes 1</h1>
<a href=./tenda.php>Anar a la pagina 1</a>
<h1>Informació dels productes 2</h1>
<a href=./tenda2.php>Anar a la pagina 2</a>
<input type="submit"  name="logout" value="Logout" href=./logout.php>
</form>	

</body>
</html>

