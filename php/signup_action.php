<?php
// Inclure le fichier de configuration de la base de données
require_once 'config.php';  // Assurez-vous que le chemin est correct

// Vérification que le formulaire a bien été soumis avec la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire avec gestion de valeurs par défaut
    $user = $_POST['username'] ?? null;
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;
    $confirm_password = $_POST['confirm_password'] ?? null;

    // Vérifier que tous les champs sont remplis
    if (empty($user) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "Tous les champs sont obligatoires.";
        exit;
    }

    // Vérifier que le mot de passe et la confirmation du mot de passe correspondent
    if ($password !== $confirm_password) {
        echo "Les mots de passe ne correspondent pas.";
        exit;
    }

    // Valider le format de l'email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "L'email n'est pas valide.";
        exit;
    }

    // Hashage du mot de passe pour le stockage sécurisé
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Préparer la requête SQL pour l'insertion des données
    $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
    $stmt = $pdo->prepare($sql);

    // Lier les paramètres
    $stmt->bindParam(':username', $user);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashed_password);

    try {
        // Exécuter la requête d'insertion
        if ($stmt->execute()) {
            // Inscription réussie, rediriger vers la page de connexion avec un paramètre "success"
            header("Location: ../html/login.php?success=singup_true");
            exit;
        } else {
            echo "Une erreur s'est produite lors de l'inscription. Veuillez réessayer.";
        }
    } catch (PDOException $e) {
        // Gestion des erreurs d'insertion dans la base de données
        echo "Erreur de base de données : " . $e->getMessage();
    }
}
?>
