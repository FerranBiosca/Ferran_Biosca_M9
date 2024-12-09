<?php
session_start();

$_SESSION['user_login']='intento';
$user=$_POST['user_log'];
$password=$_POST['pswd'];



if ($user != $password) {
#	echo "Login incorrecte!";
	
	session_destroy();
		
	header("Location: ./index.html");
}
else {


	echo "<h1>Benvingut a la botiga d'informatica:  $user</h1> <br>";
	$_SESSION['user_login']=$user;
	$_SESSION['log']=true;


	header("Location: ./login_correcte.php");
}

?>