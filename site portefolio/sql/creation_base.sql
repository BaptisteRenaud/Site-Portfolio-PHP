-- Database Creation
CREATE DATABASE IF NOT EXISTS `SiteP`;
USE `SiteP`;

DROP TABLE IF EXISTS Projet;


-- Table Creation
CREATE TABLE IF NOT EXISTS `Projet` (
    `Projet_id` int AUTO_INCREMENT,
    `Name` varchar(200) NOT NULL,
    `Description` varchar(700),
    `other1` varchar(300),
    `other2` varchar(300),
    `other3` varchar(300),
    PRIMARY KEY (`Projet_id`)
);

-- Data Insertion
INSERT INTO `Projet` (`Name`, `Description`, `other1`,`other2`,`other3`) 
VALUES 
('Système de détection de phishing basé sur une URL',
 "Description : Ce projet consiste à développer un script Python capable d'analyser une URL pour déterminer si elle est potentiellement malveillante. Le script utilise des techniques simples comme la vérification de mots-clés suspects, de longueurs d'URL inhabituelles et des caractères spéciaux souvent associés au phishing.",
 'Identifier si une URL est suspecte en fonction de critères définis.',
 " Marquer les URLs malveillantes ou légitimes.",
 " Produire un rapport et intégrer une option pour vérifier les URLs contre des bases de données publiques comme VirusTotal."),
 
("Déploiement d’une solution de protection contre les ransomwares",
 "Ce projet vise à protéger une entreprise des attaques par ransomware en déployant des outils avancés (EDR/XDR, sauvegardes sécurisées) et en renforçant la sensibilisation des employés. Après un audit initial pour identifier les vulnérabilités, des solutions de défense proactive et réactive sont mises en place : détection comportementale, gestion des privilèges, et sauvegardes régulières. La formation des utilisateurs et la surveillance continue complètent cette stratégie pour garantir une réduction significative des risques et une réponse rapide en cas d’attaque.",
 "Réduction du risque de ransomware de 80 % grâce à des défenses renforcées.",
 "Sauvegardes protégées contre les infections par ransomware.",
 "Sensibilisation accrue des utilisateurs finaux (diminution des clics sur des liens malveillants)."),

("Plateforme de Tests d'Intrusion pour Réseaux",
"Description : Développement d'une plateforme web éducative permettant de simuler des tests d'intrusion dans des environnements réseau sécurisés. Ce projet vise à former les apprenants aux techniques d'analyse réseau et de détection des vulnérabilités à travers des scénarios réalistes.",
 "Simulations réalistes : ARP Spoofing, DNS Spoofing, analyse réseau.",
 "Interface utilisateur interactive avec suivi des actions en temps réel.",
 "Rapports détaillés générés après chaque simulation."),

('Analyse de Risques en Cybersécurité',
 "L’analyse des risques en cybersécurité consiste à identifier, evaluer et gérer les menaces et vulnérabilités qui peuvent affecter la sécurité des systèmes d’information. Elle permet de protéger les données sensibles, de réduire les impacts financiers des cyberattaques et d’assurer la continuité des activités. Ce processus est essentiel pour anticiper les risques, mettre en place des mesures de sécurité adaptées et renforcer la résilience face aux cybermenaces.",
 "définition des actifs à protéger, tels que les données sensibles, les systèmes critiques, les applications et les infrastructures.",
 "comprendre la valeur de chaque actif pour prioriser les efforts de sécurité.",
 "identifier les menaces potentielles, qui peuvent être internes (erreurs humaines, négligence) ou externes (attaques malveillantes, cybercriminalité)."),
 
("Développement d'un pare-feu basique avec Python",
 "Description: Ce projet vise à créer un pare-feu basique en utilisant Python pour surveiller et bloquer le trafic réseau indésirable. Il permet de montrer votre compréhension des concepts de filtrage réseau, des sockets et de la sécurité réseau.",
 "Capturer le trafic réseau entrant et sortant en temps réel.",
 "Appliquer des règles simples pour bloquer ou autoriser certains types de trafic",
 "Enregistrer les journaux des connexions autorisées et bloquées pour un audit futur.");