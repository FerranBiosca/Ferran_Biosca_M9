<?php session_start();
    if(! isset($_SESSION['log'])){
        header("Location: index.html");
    }
    echo $_SESSION['rol'];
    echo $_SESSION['nom'];
    
$conn = mysqli_connect("localhost", "ferran1", "ferran", "ferran_biosca_iticdesk");
if (! $conn) {
    echo "No s'ha pogut connectar a la BBDD";
    }
    $sql ="SELECT * FROM usuaris WHERE correu=\"$user\" AND contrasenya=\"$password\"";
    $query =mysqli_query($conn,$sql);
    $rows= mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Registre d'Incidències</title>
</head>
<body>
    <header>
        <h1>Registre d'Incidències</h1>
        <p>Usuari: <?php echo $_SESSION['rol']; ?> - Rol: <?php echo $sql ="SELECT * FROM usuaris WHERE correu=\"$correu\" AND rol=\"$rol\""; ?></p>
        <button onclick="location.href='acces.php'">Torna a l'inici/button>
    </header>
    <main>
        <?php if ($missatge): ?>
            <p><?php echo $missatge; ?></p>
            <button onclick="location.href='registre_incidencies.php'">Registrar una nova incidència</button>
        <?php else: ?>
            <form method="post" action="registre_incidencies.php">
                <label for="prioritat">Prioritat:</label>
                <input type="text" id="prioritat" name="prioritat" required><br>
                <label for="descripcio">Descripció:</label>
                <textarea id="descripcio" name="descripcio" required></textarea><br>
                <button type="submit">Registrar Incidència</button>
            </form>
        <?php endif; ?>
    </main>
</body>
</html>

