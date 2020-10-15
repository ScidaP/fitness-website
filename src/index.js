if (window.location.toString().match("index.html")) {
    var $carouselImg = document.getElementsByClassName("carousel-item");

    function cambiarFondo() {
        let i = Math.floor(Math.random() * $carouselImg.length); // Creates a random number between the amount of images in carousel, and 0.
        $carouselImg[i].classList.add("active"); // Adds class "active" to a random carousel image.
    }
cambiarFondo();
}

if (window.location.toString().match("musica.html")) {
    var $botonRegueton = document.getElementsByClassName("nav-regueton");
    var $playlistDiv = document.getElementsByClassName("playlist-container");
}