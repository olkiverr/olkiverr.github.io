<?php
// Inclure la configuration pour la connexion à la base de données
include('config.php');

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupérer les données du formulaire et les sécuriser
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validation simple des données (vous pouvez ajouter des règles supplémentaires)
    if (empty($name) || empty($email) || empty($message)) {
        echo "Tous les champs sont obligatoires.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Valider l'email
        echo "L'adresse email n'est pas valide.";
    } else {
        // Si les données sont valides, on peut envoyer l'email
        
        // Destinataire de l'email
        $to = "olivierzielinski34@gmail.com"; // Remplacer par l'email de destination
        $subject = "Message de contact de $name"; // Sujet de l'email

        // Corps du message
        $body = "
        Vous avez reçu un message via le formulaire de contact de MangaMuse.\n\n
        Nom: $name\n
        Email: $email\n\n
        Message:\n$message
        ";

        // En-têtes de l'email
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Envoi de l'email
        if (mail($to, $subject, $body, $headers)) {
            echo "Merci pour votre message. Nous vous répondrons dès que possible.";
        } else {
            echo "Une erreur est survenue lors de l'envoi de votre message. Veuillez réessayer plus tard.";
        }
    }
} else {
    echo "Erreur : le formulaire n'a pas été soumis correctement.";
}
?>
