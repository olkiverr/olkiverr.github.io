// Fonction pour afficher le snackbar lors du succès de l'inscription
function showSnackbar_signup_success() {
    var snackbar = document.createElement("div");
    snackbar.id = "snackbar";
    snackbar.textContent = "Inscription réussie ! Vous pouvez maintenant vous connecter.";

    // Appliquer les styles directement via JavaScript
    snackbar.style.visibility = "hidden";
    snackbar.style.minWidth = "250px";
    snackbar.style.position = "absolute";
    snackbar.style.bottom = "15%";
    snackbar.style.left = "38%";
    snackbar.style.backgroundColor = "#4CAF50"; // Vert pour le succès
    snackbar.style.color = "#fff";
    snackbar.style.borderRadius = "10px";
    snackbar.style.padding = "10px";
    snackbar.style.zIndex = "1000";
    snackbar.style.fontSize = "17px";
    snackbar.style.opacity = "0"; // Masqué par défaut

    document.body.appendChild(snackbar);

    setTimeout(function() {
    snackbar.style.visibility = "visible";
    snackbar.style.opacity = "1";
    snackbar.style.animation = "fadeInOut 3s ease-in-out";
    }, 0);

    setTimeout(function() {
    snackbar.style.visibility = "hidden";
    snackbar.style.opacity = "0";
    }, 3000);
}

// Fonction pour afficher le snackbar lors de l'échec de la connexion
function showSnackbar_login_fail() {
    var snackbar = document.createElement("div");
    snackbar.id = "snackbar";
    snackbar.textContent = "Connexion échouée ! Mot de passe ou identifiant incorrect.";

    snackbar.style.visibility = "hidden";
    snackbar.style.minWidth = "250px";
    snackbar.style.position = "absolute";
    snackbar.style.bottom = "15%";
    snackbar.style.left = "38%";
    snackbar.style.backgroundColor = "#af4c4c"; // Rouge pour l'erreur
    snackbar.style.color = "#fff";
    snackbar.style.borderRadius = "10px";
    snackbar.style.padding = "10px";
    snackbar.style.zIndex = "1000";
    snackbar.style.fontSize = "17px";
    snackbar.style.opacity = "0"; // Masqué par défaut

    document.body.appendChild(snackbar);

    setTimeout(function() {
    snackbar.style.visibility = "visible";
    snackbar.style.opacity = "1";
    snackbar.style.animation = "fadeInOut 3s ease-in-out";
    }, 0);

    setTimeout(function() {
    snackbar.style.visibility = "hidden";
    snackbar.style.opacity = "0";
    }, 3000);
}

// Fonction pour afficher le snackbar lors du succès de la connexion
function showSnackbar_login_success() {
    var snackbar = document.createElement("div");
    snackbar.id = "snackbar";
    snackbar.textContent = "Connexion réussie !";

    snackbar.style.visibility = "hidden";
    snackbar.style.minWidth = "250px";
    snackbar.style.position = "absolute";
    snackbar.style.bottom = "15%";
    snackbar.style.left = "43%";
    snackbar.style.backgroundColor = "#4CAF50"; // Vert pour le succès
    snackbar.style.color = "#fff";
    snackbar.style.textAlign = "center";
    snackbar.style.borderRadius = "10px";
    snackbar.style.padding = "10px";
    snackbar.style.zIndex = "1000";
    snackbar.style.fontSize = "17px";
    snackbar.style.opacity = "0"; // Masqué par défaut

    document.body.appendChild(snackbar);

    setTimeout(function() {
    snackbar.style.visibility = "visible";
    snackbar.style.opacity = "1";
    snackbar.style.animation = "fadeInOut 3s ease-in-out";
    }, 0);

    setTimeout(function() {
    snackbar.style.visibility = "hidden";
    snackbar.style.opacity = "0";
    }, 3000);
}

// Vérifie le chemin actuel de l'URL et conditionne l'affichage des snackbars
window.onload = function () {
    var urlParams = new URLSearchParams(window.location.search);
    var currentPage = window.location.pathname; // Récupère le chemin de l'URL actuelle

    // Si on est sur signup.php, afficher le snackbar d'échec d'inscription
    if (currentPage.includes('signup.php')) {
    if (urlParams.has('success') && urlParams.get('success') === 'signup_false') {
    showSnackbar_signup_fail();
    }
    }
    // Si on est sur login.php ou une page spécifique de connexion, afficher les snackbars
    if (currentPage.includes('login.php')) {
    if (urlParams.has('success') && urlParams.get('success') === 'login_false') {
    showSnackbar_login_fail(); // Connexion échouée
    }
    }
    if (currentPage.includes('index.php'))  {
    if (urlParams.has('success') && urlParams.get('success') === 'login_true') {
    showSnackbar_login_success(); // Connexion réussie
    }
    }
    // Si on est sur la page d'accueil ou d'autres pages, afficher le snackbar d'inscription réussie
    if (currentPage.includes('login.php')) {
    if (urlParams.has('success') && urlParams.get('success') === 'signup_true') {
    showSnackbar_signup_success(); // Inscription réussie
    }
    }
}
