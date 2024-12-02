<?php
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variables.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Cybersécurité</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>John Cybersecurity</h1>
            <p>Expert en cybersécurité | Protection des systèmes d'information</p>
        </div>
    </header>

    <nav>
        <ul class="menu">
            <a href="index.php">Accueil</a>
            <li><a href="projet1.php">Projet 1</a></li>
            <li><a href="projet2.php">Projet 2</a></li>
            <li><a href="projet3.php">Projet 3</a></li>
            <li><a href="projet4.php">Projet 4</a></li>
            <li><a href="projet5.php">Projet 5</a></li>
        </ul>
    </nav>

    <!-- Projet 1 -->
    <section id="project1" class="section">
        <div class="container">
            <br>
            <h2><?php echo $Projet[2]["Name"]?></h2>
            <p><?php echo $Projet[2]["Description"]?></p>
            <br><br>
            <strong><?php echo "Fonctionnalités principales :"?></strong>
            <br><br>
            <li><?php echo $Projet[2][3]?></li>
            <li><?php echo $Projet[2][4]?></li>
            <li><?php echo $Projet[2][5]?></li>
            <br>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 John Cybersecurity - Persona</p>
        </div>
    </footer>
</body>
</html>