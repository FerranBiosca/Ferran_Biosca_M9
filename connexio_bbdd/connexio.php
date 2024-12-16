<?php

$conn = mysqli_connect("localhost", "ferran1", "ferran", "test");

if(!$conn) {
    echo "No s'ha pogut connectar correctament". mysqli_connect_error();
}
else{
    echo "Connecció realitzada correctament";
    $query=mysqli_query($conn, "INSERT INTO usuaris (dni, nom, cognom) VALUES ('12673456k','Agutí','Font')");
}
?>