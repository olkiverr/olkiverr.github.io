function moveSlideTrending(container, direction) {
    var slider = document.querySelector(container)
    var itemWidth = document.querySelector('.div-anime-img').offsetWidth + 100 ; // Largeur d'un élément avec la marge
    var scrollAmount = itemWidth; // Défilement d'une largeur d'élément à chaque fois
    if (direction === 'left') {
        // Si on clique sur la flèche gauche, on recule de l'élément
        slider.scrollLeft -= scrollAmount;
    } else if (direction === 'right') {
        // Si on clique sur la flèche droite, on avance d'un élément
        slider.scrollLeft += scrollAmount;
    }
}