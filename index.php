<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta-information pour le document -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Liens vers les fichiers CSS externes -->
    <link rel="stylesheet" href="css/index-style.css">
    <link rel="stylesheet" href="css/template.css">
    
    <!-- Icône du site -->
    <link rel="shortcut icon" href="img/MangaMuse_White-Book.png" type="image/x-icon">
    
    <!-- Titre de la page -->
    <title>MangaMuse</title>
</head>
<body>
    <header>
        <!-- Logo du site -->
        <div class="div-logo">
            <a href="index.php"><img src="img/MangaMuse_White.png" alt="Logo MangaMuse"></a>
        </div>
        
        <div class="logo-right">
            <!-- Barre de navigation (recherche et liens autres) -->
            <div class="topnav">
                <!-- Champ de recherche -->
                <div class="div-search">
                    <input type="search" placeholder="Search">
                </div>
                
                <!-- Liens supplémentaires (Login, Contact) -->
                <div class="other-stuff">
                    <a href="html/login.php">Login</a>
                    <a href="html/contact.php">Contact</a>
                </div>
            </div>

            <!-- Navigation principale avec des liens vers les sections du site -->
            <div class="nav-bar">
                <a href="#favorite">Favorite</a>
                <a href="#trending">Trending</a>
                <a href="#upcoming">Upcoming</a>
            </div>
        </div>
    </header>
    
    <main>
        <!-- Section pour les anime en tendance -->
        <div class="trending-slider-container">
            <p>Trending🔥</p>
            <div class="trending-slider">
                <!-- Flèche gauche pour naviguer dans le slider -->
                <div class="slider-arrow left-arrow" onclick="moveSlideTrending('.div-anime-img-trending-container', 'left')">&#10094;</div>

                <!-- Conteneur des images des animes tendances -->
                <div class="div-anime-img-trending-container">
                    <!-- Chaque div représente une image d'anime -->
                    <div class="div-anime-img">
                        <img src="anime_img/DanDaDan.webp" alt="">
                        <p>Dan Da Dan</p>
                    </div>
                    <div class="div-anime-img">
                        <img src="anime_img/seirei_gensouki_2.jpg" alt="">
                        <p>Seirei Gensouki Season 2</p>
                    </div>
                    <div class="div-anime-img">
                        <img src="anime_img/sword_art_online.jpg" alt="">
                        <p>Sword Art Online</p>
                    </div>
                    <div class="div-anime-img">
                        <img src="anime_img/Detective_Conan.webp" alt="">
                        <p>Detective Conan</p>
                    </div>
                    <div class="div-anime-img">
                        <img src="anime_img/Isekai_wa_Smartphoen.webp" alt="">
                        <p>In Another World with My Smartphone 2</p>
                    </div>
                    <div class="div-anime-img">
                        <img src="anime_img/nom_trop_long.webp" alt="">
                        <p>I Got a Cheat Skill in Another World and Became Unrivaled in the Real World</p>
                    </div>
                    <div class="div-anime-img">
                        <img src="anime_img/Tower_of_God_season_2.webp" alt="">
                        <p>Tower Of God Season 2</p>
                    </div>
                    <div class="div-anime-img">
                        <img src="anime_img/Blue_Lock_vs_U-20.webp" alt="">
                        <p>Blue Lock vs U-20 Japan</p>
                    </div>
                    <div class="div-anime-img">
                        <img src="anime_img/Yoru_wa_Neko_to_Issho.webp" alt="">
                        <p>Yoru wa Neko to Issho</p>
                    </div>
                    <div class="div-anime-img">
                        <img src="anime_img/redo_of_healer.jpg" alt="">
                        <p>Redo Of Healer</p>
                    </div>
                    <div class="div-anime-img">
                        <img src="anime_img/Danmachi_season_5.webp" alt="">
                        <p>Danmachi Season 5</p>
                    </div>
                </div>

                <!-- Flèche droite pour naviguer dans le slider -->
                <div class="slider-arrow right-arrow" onclick="moveSlideTrending('.div-anime-img-trending-container', 'right')">&#10095;</div>
            </div>
        </div>

        <!-- Section pour les anime à venir -->
        <div class="upcoming-slider-container">
            <p>Upcoming⏳</p>
            <div class="upcoming-slider">
                <!-- Flèche gauche pour naviguer dans le slider des animes à venir -->
                <div class="slider-arrow left-arrow" onclick="moveSlideTrending('.div-anime-img-upcoming-container', 'left')">&#10094;</div>

                <!-- Conteneur des images des animes à venir -->
                <div class="div-anime-img-upcoming-container">
                    <!-- Chaque div représente une image d'anime à venir -->
                    <div class="div-anime-img">
                        <img src="anime_img/DanDaDan.webp" alt="">
                        <p>Dan Da Dan</p>
                    </div>
                    <div class="div-anime-img">
                        <img src="anime_img/seirei_gensouki_2.jpg" alt="">
                        <p>Seirei Gensouki Season 2</p>
                    </div>
                    <div class="div-anime-img">
                        <img src="anime_img/sword_art_online.jpg" alt="">
                        <p>Sword Art Online</p>
                    </div>
                    <div class="div-anime-img">
                        <img src="anime_img/Detective_Conan.webp" alt="">
                        <p>Detective Conan</p>
                    </div>
                    <div class="div-anime-img">
                        <img src="anime_img/Isekai_wa_Smartphoen.webp" alt="">
                        <p>In Another World with My Smartphone 2</p>
                    </div>
                    <div class="div-anime-img">
                        <img src="anime_img/nom_trop_long.webp" alt="">
                        <p>I Got a Cheat Skill in Another World and Became Unrivaled in the Real World</p>
                    </div>
                    <div class="div-anime-img">
                        <img src="anime_img/Tower_of_God_season_2.webp" alt="">
                        <p>Tower Of God Season 2</p>
                    </div>
                    <div class="div-anime-img">
                        <img src="anime_img/Blue_Lock_vs_U-20.webp" alt="">
                        <p>Blue Lock vs U-20 Japan</p>
                    </div>
                    <div class="div-anime-img">
                        <img src="anime_img/Yoru_wa_Neko_to_Issho.webp" alt="">
                        <p>Yoru wa Neko to Issho</p>
                    </div>
                    <div class="div-anime-img">
                        <img src="anime_img/redo_of_healer.jpg" alt="">
                        <p>Redo Of Healer</p>
                    </div>
                    <div class="div-anime-img">
                        <img src="anime_img/Danmachi_season_5.webp" alt="">
                        <p>Danmachi Season 5</p>
                    </div>
                </div>

                <!-- Flèche droite pour naviguer dans le slider des animes à venir -->
                <div class="slider-arrow right-arrow" onclick="moveSlideTrending('.div-anime-img-upcoming-container', 'right')">&#10095;</div>
            </div>
        </div>
    </main>
    
    <footer>
        <!-- Informations de contact -->
        <div class="contact-info">
            <h2>Informations de contact</h2>
            <p>Email : <a href="mailto:o.zielinski.3032@gmail.com">o.zielinski.3032@gmail.com</a></p>
            <p>Téléphone : <a href="tel:+0123456789">+01 23 45 67 89</a></p>
            <p>Adresse : 123 Rue des Mangas, 75000 Paris, France</p>
        </div>
        
        <!-- Copyright -->
        <p>Copyright &copy; Zielinski Olivier</p>
    </footer>

    <!-- Scripts pour les fonctionnalités des flèches du slider et des notifications de connexion -->
    <script src="js/slide_arrows.js"></script>
    <script src="js/login_snackbar.js"></script>
</body>
</html>
