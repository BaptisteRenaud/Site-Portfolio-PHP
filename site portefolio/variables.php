<?php

// Retrieving Variables Using the MySQL Client
$employeesStatement = $mysqlClient->prepare('SELECT * FROM Projet');
$employeesStatement->execute();
$Projet = $employeesStatement->fetchAll();

// $Projet = [
//     [
//         'Name' => "Système de détection de phishing basé sur une URL",
//         'description' => "Description : Ce projet consiste à développer un script Python capable d'analyser une URL pour déterminer si elle est potentiellement malveillante. Le script utilise des techniques simples comme la vérification de mots-clés suspects, de longueurs d'URL inhabituelles et des caractères spéciaux souvent associés au phishing.",
//         'objectif' => "Identifier si une URL est suspecte en fonction de critères définis. Marquer les URLs malveillantes ou légitimes. Produire un rapport et intégrer une option pour vérifier les URLs contre des bases de données publiques comme VirusTotal.",
//     ],
//     [
//         'name' => 'Maxime',
//         'departement' => 'Finance',
//         'experiance' => 2,
//     ],
// ];