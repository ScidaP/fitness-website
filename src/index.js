if (window.location.toString().match("index.html")) {
    var $carouselImg = document.getElementsByClassName("carousel-item");

    function cambiarFondo() {
        let i = Math.floor(Math.random() * $carouselImg.length); // Creates a random number between the amount of images in carousel, and 0.
        $carouselImg[i].classList.add("active"); // Adds class "active" to a random carousel image.
    }
cambiarFondo();
}

if ((window.location.toString().match("musica.html")) || (window.location.toString().match("cardio.html")) || (window.location.toString().match("nutricion.html"))) {
    var $mainMusica = document.getElementsByClassName("main-musica");
    var $parallax = document.getElementsByClassName("parallax");
    var images = ['A1.jpg', 'A2.jpg', 'A3.jpg', 'A4.jpg', 'A5.jpg', 'A6.jpg', 'A7.jpg', 'A8.jpg', 'A9.jpg', 'A10.jpg', 'A11.jpg', 'A12.jpg'];

    if (window.location.toString().match("musica.html")) {
        cambiarBg($mainMusica);
    } else {
        cambiarBg($parallax);
    }

    function cambiarBg(a) {
        $(a).css({'background-image': 'url(../img/parallax/' + images[Math.floor(Math.random() * images.length)] + ')'});
    }

    // Código para que el background image de la pag "musica.html" y el parallax de "cardio.html" cambie con cada refresh.
}

if (window.location.toString().match("contactanos.html")) {
    var $form = document.getElementById('form');

    var $text = document.getElementById('text');

    function validarEmail() {
        var $emailBox = document.getElementById('email');
        var $email = document.getElementById("email").value;

        var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

        if ($email.match(emailPattern)) {
            $emailBox.classList.add("valid");
            $emailBox.classList.remove("invalid");
        } else {
            $emailBox.classList.remove("valid")
            $emailBox.classList.add("invalid");
        }
        if ($email = "") {
            $emailBox.classList.remove("valid");
            $emailBox.classList.remove("invalid");
        }
    }
}