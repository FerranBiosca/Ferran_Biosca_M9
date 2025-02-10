<?php
session_start();

$_SESSION['user_login']='intento';
$user=$_POST['user_log'];
$password=$_POST['pswd'];

$conn = mysqli_connect("localhost", "ferran1", "ferran", "ferran_biosca_iticdesk");
if (! $conn) {
	echo "No s'ha pogut connectar a la BBDD";
}
$sql_verificacio="SELECT * FROM usuaris WHERE correu=\"$user\" AND contrasenya=\"$password\"";
echo "$sql_verificacio";
$query_verificacio=mysqli_query($conn,$sql_verificacio);
$rows= mysqli_num_rows($query_verificacio);
if($rows != 1){
	header("Location: acces.php");
}
else{
	header("Location: index.html");
}

?>