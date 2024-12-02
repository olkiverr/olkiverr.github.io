<?php
// Inclure le fichier de configuration de la base de données
require_once 'config.php';  // Assurez-vous que le chemin est correct

// Récupérer les données du formulaire
$user = $_POST['username'];
$password = $_POST['password'];

// Vérifier si l'utilisateur existe dans la base de données
$sql = "SELECT * FROM users WHERE username = :username";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':username', $user);
$stmt->execute();
$user_data = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user_data && password_verify($password, $user_data['password'])) {
    header("Location: ../index.php?success=login_true");
    exit;
} else {
    // Si l'utilisateur n'existe pas ou si le mot de passe est incorrect
    header("Location: ../html/login.php?success=login_false");
            exit;
}
?>
