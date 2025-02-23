<?php
session_start();

$_SESSION['user_login']='intento';
$user=$_POST['user_log'];
$password=$_POST['pswd'];

$conn = mysqli_connect("localhost", "ferran1", "ferran", "ferran_biosca_iticdesk");
if (! $conn) {
	echo "No s'ha pogut connectar a la BBDD";
}
$sql ="SELECT * FROM usuaris WHERE correu=\"$user\" AND contrasenya=\"$password\"";
$query =mysqli_query($conn,$sql);
$rows= mysqli_num_rows($query);
if($rows != 1){
	header("Location: index.html");
}
else{
	$result_query_array = mysqli_fetch_array($query);
	echo $result_query_array["rol"]=$result_query_array["rol"];
	$_SESSION["rol"]=
	$_SESSION["user_login"]=$user;
	$_SESSION['log']=true;
	header("Location: acces.php");
}

?>