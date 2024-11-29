<?php
// Paramètres de connexion à la base de données
$host = 'localhost';          // Adresse de l'hôte
$dbname = 'mangamuse';        // Nom de la base de données
$username = 'root';           // Nom d'utilisateur MySQL
$password = '';               // Mot de passe MySQL (vide par défaut pour 'root')

// Tentative de connexion à la base de données
try {
    // Création de la connexion PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Définition du mode d'erreur en exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // En cas d'erreur, afficher un message d'erreur et arrêter l'exécution
    die("Erreur de connexion : " . $e->getMessage());
}
?>
