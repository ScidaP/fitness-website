if (window.location.toString().match("index.html")) {
    var $carouselImg = document.getElementsByClassName("carousel-item");

    function cambiarFondo() {
        let i = Math.floor(Math.random() * $carouselImg.length); // Creates a random number between the amount of images in carousel, and 0.
        $carouselImg[i].classList.add("active"); // Adds class "active" to a random carousel image.
    }
cambiarFondo();
}

if (window.location.toString().match("musica.html")) {
    var $mainMusica = document.getElementsByClassName("main-musica");

    var images = ['A1.jpg', 'A2.jpg', 'A3.jpg', 'A4.jpg', 'A5.jpg', 'A6.jpg', 'A7.jpg', 'A8.jpg', 'A9.jpg', 'A10.jpg', 'A11.jpg', 'A12.jpg'];
    $(".main-musica").css({'background-image': 'url(../img/parallax/' + images[Math.floor(Math.random() * images.length)] + ')'});
    // Código para que el background image de la pag "musica.html" cambie con cada refresh.
}