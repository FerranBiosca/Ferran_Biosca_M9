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
    /*$insert_sql = "INSERT INTO usuaris(`dni`, `nom`, `cognom`, `nota`) VALUES ('99908461M','Pep,'Sánchez,'5')";
    #$query_insert = mysqli_query($conn, $insert_sql);
    $affected_rows= mysqli_affected_rows($conn);
    echo "Hi ha $affected_rows afectacions a la BBDD";*/

    $sql="SELECT * FROM `usuaris` WHERE nota >= 5";
    $query=mysqli_query($conn, $sql);
    while( $row = mysqli_fetch_array($query)) {
        echo "Nom: " . $row['nom'] . ", cognom: " . $row['cognom'] . ", nota: " . $row['nota'];
    }

}
?>
