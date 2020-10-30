if (window.location.toString().match("home")) {
    var $carouselImg = document.getElementsByClassName("carousel-item");

    function cambiarFondo() {
        let i = Math.floor(Math.random() * $carouselImg.length); // Creates a random number between the amount of images in carousel, and 0.
        $carouselImg[i].classList.add("active"); // Adds class "active" to a random carousel image.
    }
cambiarFondo();
}

var images = ['A1.jpg', 'A2.jpg', 'A3.jpg', 'A4.jpg', 'A5.jpg', 'A6.jpg', 'A7.jpg', 'A8.jpg', 'A9.jpg', 'A10.jpg', 'A11.jpg', 'A12.jpg'];

if ((window.location.toString().match("musica.php")) || (window.location.toString().match("cardio.php")) || (window.location.toString().match("nutricion.php"))
|| (window.location.toString().match("ejer_conpesa")) || (window.location.toString().match("ejer_sinpesa"))) {
    var $mainMusica = document.getElementsByClassName("main-musica");
    var $mainConPesa = document.getElementsByClassName("main-ejerconpesa");
    var $mainSinPesa = document.getElementsByClassName("main-ejersinpesa");
    var $parallax = document.getElementsByClassName("parallax");

    if (window.location.toString().match("musica.php")) {
        cambiarBg($mainMusica);
    } else if (window.location.toString().match("ejer_sinpesa")) {
        cambiarBg($mainSinPesa);
    } else if (window.location.toString().match("ejer_conpesa")) {
        cambiarBg($mainConPesa);
    } else {
        cambiarBg($parallax);
    }

    function cambiarBg(a) {
        $(a).css({'background-image': 'url(../img/parallax/' + images[Math.floor(Math.random() * images.length)] + ')'});
    }
// Código para que el background image de la pag "musica.php" y el parallax de "cardio.php" cambie con cada refresh.
}

if (window.location.toString().match("contactanos.php")) {
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

var $navItem = document.getElementsByClassName('nav-item');
var paginas = ["home", "ejer_conpesa", "ejer_sinpesa", "cardio", "nutricion", "musica", "compartir", "contactanos"];

var i;

for (i=0; i < paginas.length; i++) { // Código para que los items de la navegación tengan la class "active" -> Se vean blancos al estar en esa página.
    if (window.location.toString().match(paginas[i])) {
        $navItem[i].classList.add("active");
    }
}

$main = document.getElementsByClassName("main");

if (window.location.toString().match("cardio") || window.location.toString().match("nutricion") || window.location.toString().match("musica") || window.location.toString().match("contactanos")) {
    var colores = ["239, 243, 17, ", "86, 243, 176, ", "14, 232, 209, ", "8, 88, 218, ", "130, 16, 231, ", "231, 16, 208, ", "89, 0, 218, ", "243, 118, 0, "];
    var alturaGradient = ["90%", "40%"];
    cambiarGradient($main);
    function cambiarGradient(a) {
        var j;
        if (window.location.toString().match("contactanos")) {
            j = 1;
        } else {
            j = 0;
        }
        $(a).css({'background-image': 'linear-gradient( 180deg,  rgba(245,245,245,1) ' + alturaGradient[j] + ', rgba(' + colores[Math.floor(Math.random() * colores.length)] + '0.65) 98.1% )'})
    }
}