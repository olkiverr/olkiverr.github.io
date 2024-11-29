<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta-information pour le document -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Liens vers les fichiers CSS externes pour le style général et spécifique à la page de signup -->
    <link rel="stylesheet" href="../css/template.css">
    <link rel="stylesheet" href="../css/signup-style.css">
    
    <!-- Icône du site -->
    <link rel="shortcut icon" href="../img/MangaMuse_White-Book.png" type="image/x-icon">
    
    <!-- Titre de la page -->
    <title>MangaMuse - Sign Up</title>
</head>
<body>
    <header>
        <!-- Logo du site avec lien vers la page d'accueil -->
        <div class="div-logo">
            <a href="../index.php"><img src="../img/MangaMuse_White.png" alt="Logo MangaMuse"></a>
        </div>
        
        <div class="logo-right">
            <!-- Barre de navigation supérieure avec recherche et autres liens -->
            <div class="topnav">
                <!-- Champ de recherche -->
                <div class="div-search">
                    <input type="search" placeholder="Search">
                </div>
                
                <!-- Liens supplémentaires pour la connexion et le contact -->
                <div class="other-stuff">
                    <a href="login.php">Login</a>
                    <a href="contact.php">Contact</a>
                </div>
            </div>

            <!-- Barre de navigation principale avec des liens vers différentes sections du site -->
            <div class="nav-bar">
                <a href="#favorite">Favorite</a>
                <a href="#trending">Trending</a>
                <a href="#upcoming">Upcoming</a>
            </div>
        </div>
    </header>
    
    <main>
        <!-- Conteneur principal pour le formulaire d'inscription -->
        <div class="login-container">
            <h2>Create an account on MangaMuse</h2>
            <!-- Formulaire d'inscription avec méthode POST pour envoyer les données à signup_action.php -->
            <form action="../php/signup_action.php" method="POST">
                <!-- Champ pour le nom d'utilisateur -->
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required placeholder="Choose your username">
                </div>
                <!-- Champ pour l'email de l'utilisateur -->
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" id="email" name="email" required placeholder="Enter your email address">
                </div>
                <!-- Champ pour le mot de passe -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Choose a password">
                </div>
                <!-- Champ pour la confirmation du mot de passe -->
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" required placeholder="Confirm your password">
                </div>
                <!-- Bouton pour soumettre le formulaire d'inscription -->
                <div class="form-group">
                    <button type="submit" class="login-btn">Create an account</button>
                </div>
            </form>
            <!-- Lien vers la page de connexion si l'utilisateur a déjà un compte -->
            <p class="signup-link">Already have an account ? <a href="login.php">Sign in</a></p>
        </div>        
    </main>

    <footer>
        <!-- Informations de contact du site -->
        <div class="contact-info">
            <h2>Contact Information</h2>
            <p>Email : <a href="mailto:o.zielinski.3032@gmail.com">o.zielinski.3032@gmail.com</a></p>
            <p>Phone : <a href="tel:+0123456789">+01 23 45 67 89</a></p>
            <p>Adresse : 123 Rue des Mangas, 75000 Paris, France</p>
        </div>
        
        <!-- Copyright du site -->
        <p>Copyright &copy; Zielinski Olivier</p>
    </footer>
</body>
</html>
