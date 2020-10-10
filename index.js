$carouselImg = document.getElementsByClassName("carousel-item");

function cambiarFondo() {
    let i = Math.floor(Math.random() * $carouselImg.length);
    $carouselImg[i].classList.add("active");
}

cambiarFondo();