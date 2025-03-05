<?php
session_start();
$_SESSION['id_session']=$usuari;
echo $_SESSION['id_session'];

$conn = mysqli_connect('localhost', 'ferranBioscaExam', 'Admin1234*', 'ferranBioscaExam');
if ( ! $conn ) {
    echo "Error: No se pudo conectar a MySQL."  . mysqli_connect_error();
}
else  {
    echo "Connexió realitzada amb èxit";
    }   
?>

<?php
$query = mysqli_query($conn, "SELECT 'TÍTULO', 'ANYO' FROM películas VALUES PUNTUACION==$títol")
?>