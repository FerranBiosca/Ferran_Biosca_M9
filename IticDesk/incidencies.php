<?php session_start();
    if(! isset($_SESSION['log'])){
        header("Location: index.html");
    }

$conn = mysqli_connect("localhost", "ferran1", "ferran", "ferran_biosca_iticdesk");
    if (! $conn) {
        echo "No s'ha pogut connectar a la BBDD";
    }
        $sql ="SELECT * FROM incidencies WHERE usuari_creat=\"$user\"";
        $query =mysqli_query($conn,$sql);
        $rows= mysqli_num_rows($query);
        echo $sql

?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Incidències</title>
</head>
<body>
    <header>
        <h1>Incidències</h1>
        <p>Usuari: <?php echo $_SESSION['rol']; ?> - Rol: <?php echo $sql ="SELECT * FROM usuaris WHERE correu=\"$correu\" AND rol=\"$rol\""; ?></p>
        <button onclick="location.href='acces.php'">Torna a la pàgina d'inici</button>
    </header>
    <main>
        <ul>
            <?php ?>
                <li>
                    <strong>Prioritat:</strong> <?php echo $sql="SELECT * FROM prioritat"; ?>
                    <strong>Data:</strong> <?php echo $sql="SELECT * FROM data"; ?>
                    <strong>Descripció:</strong> <?php echo $sql="SELECT * FROM descripcio"; ?>
                </li>
            <?php ?>
        </ul>
    </main>
</body>
</html>
