<?php

$nota = $_GET['nota'];
echo "$nota";

$conn = mysqli_connect("localhost", "ferran1", "ferran", "test");

if(!$conn) {
    echo "No s'ha pogut connectar a la BBDD";
}
else {
    #Per treure la quantitat de gent que ha tret la nota que li demanem:
    /*$sql="SELECT * FROM usuaris WHERE nota >= $nota";
    $query= mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($query);
    echo "Hi ha $rows alumnes amb més d'un $nota";*/

    #Per insertar un usuari:
    $insert_sql = "INSERT INTO usuaris(`dni`, `nom`, `cognom`, `nota`) VALUES ('48968288M','Pedro','Picapiedra','2')";
    $query_insert = mysqli_query($conn, $insert_sql);

}
?>