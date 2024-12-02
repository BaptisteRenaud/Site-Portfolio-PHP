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
            <img src="pfp.jpg" alt="Cybersécurité" class="profil-image">
            <p>Expert en cybersécurité | Protection des systèmes d'information</p>
        </div>
    </header>
    
    <nav>
        <ul class="menu">
            <li><a href="#about">À propos</a></li>
            <li><a href="#skills">Compétences</a></li>
            <li><a href="#projects">Projets</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <section id="about" class="section">
        <div class="container">
            <h2>À propos</h2>
            <p>Professionnel passionné par la cybersécurité avec une expérience dans les systèmes de détections, les déploiements de solutions, les tests d'intrusions, l'analyses de riques, et le développement de pare-feu.</p>
        </div>
    </section>

    <section id="skills" class="section">
        <div class="container">
            <h2>Compétences</h2>
            <ul>
                <li> Gestion des vulnérabilités et mise en œuvre de patchs</li>
                <li> Surveillance continue et détection des incidents de sécurité</li>
                <li> Cryptographie et sécurisation des communications</li>
                <li> Audits de sécurité et tests de pénétration</li>
            </ul>
        </div>
    </section>

    <section id="projects" class="section">
        <div class="container">
            <h2>Projets</h2>
            <ul>
                <li><a href="projet1.php"><strong></strong>Système de détection de phishing basé sur une URL</a></li>
                <li><a href="projet2.php"><strong></strong>Déploiement d’une solution de protection contre les ransomwares</a></li>
                <li><a href="projet3.php"><strong></strong>Plateforme de Tests d'Intrusion pour Réseaux</a></li>
                <li><a href="projet4.php"><strong></strong>Analyse de Risques en Cybersécurité</a></li>
                <li><a href="projet5.php"><strong></strong>Développement d'un Pare-feu Basique avec Python</a></li>
            </ul>
        </div>
    </section>

    <section id="contact" class="section">
        <div class="container">
            <h2>Contact</h2>
            <p>N'hésitez pas à me contacter :</p>
            <ul>
                <li>Email : JohnCybersecurity@gmail.com</li>
                <li>LinkedIn : <a href="john_linkdin.pdf" target="_blank">linkedin.com/in/JohnC</a></li>
                <li><a href="john_cv.pdf" target="_blank">CV</a></li>
                <li>Téléphone : +33 6 12 34 56 78</li>
            </ul>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 John Cybersecurity - Persona</p>
        </div>
    </footer>
</body>
</html>