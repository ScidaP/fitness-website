<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@300;500&display=swap" rel="stylesheet"> 
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="../css/fontawesomecss/all.min.css">
    <title>BeFit</title>
</head>
<body>
  <header class="header" id="cielo">
  </header>
  <?php include '../php/nav.php'?>
      <main class="main-musica">
        <ul class="aside-musica navbar-nav pt-5">
            <li class="nav-item">
              <a class="nav-link navside" href="#regueton">
                <i class="fas fa-music mr-1"></i>Reggaeton
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link navside" href="#intenso">
                <i class="fas fa-music mr-1"></i>Intense
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link navside" href="#ingles">
                <i class="fas fa-music mr-1"></i>English
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link navside" href="#chill">
                <i class="fas fa-music mr-1"></i>Chill
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link navside" href="#gymmix">
                <i class="fas fa-music mr-1"></i>Gym Mix
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link navside" href="#upbeat">
                <i class="fas fa-music mr-1"></i>Upbeat
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link navside" href="#motivation">
                <i class="fas fa-music mr-1"></i>Motivation
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link navside" href="#meditation">
                <i class="fas fa-music mr-1"></i>Meditation
              </a>
            </li>
          </ul>
        <div class="linea-container">
          <div class="fila-container">
            <div class="playlist-container">
              <h1 class="display-1 mx-auto titulo titulo-playlist" id="regueton" style="margin-top: -55%;">Reggaeton</h1>
              <iframe src="https://open.spotify.com/embed/playlist/061xZeYgr9dCCYh2MWovDs" width="700" height="580" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>
            <div class="playlist-container">
              <h1 class="display-1 mx-auto titulo titulo-playlist" id="intenso" style="margin-top: -55%;">Intense</h1>
              <iframe src="https://open.spotify.com/embed/playlist/5cAwvaSXeNSrSbmrOUSBzo" width="700" height="580" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>
          </div>
          <div class="fila-container">
            <div class="playlist-container">
              <h1 class="display-1 mx-auto titulo titulo-playlist" id="ingles">In English</h1>
              <iframe src="https://open.spotify.com/embed/playlist/0evO3baKNG9RTzMwtHmHp0" width="700" height="580" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>
            <div class="playlist-container">
              <h1 class="display-1 mx-auto titulo titulo-playlist" id="chill">Chill</h1>
              <iframe src="https://open.spotify.com/embed/playlist/7ozIozDp260fjNOZy1yzRG" width="700" height="580" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>
          </div>
          <div class="fila-container">
            <div class="playlist-container">
              <h1 class="display-1 mx-auto titulo titulo-playlist" id="gymmix">Gym Mix</h1>
              <iframe src="https://open.spotify.com/embed/playlist/2BZlf53rIEhHxcyN2ztmTV" width="700" height="580" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>
            <div class="playlist-container">
              <h1 class="display-1 mx-auto titulo titulo-playlist" id="upbeat">Upbeat</h1>
            <iframe src="https://open.spotify.com/embed/playlist/5QrJdugsjYjMDH7HGxTRWl" width="700" height="580" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>
          </div>
          <div class="fila-container">
            <div class="playlist-container">
              <h1 class="display-1 mx-auto titulo titulo-playlist" id="motivation">Motivation</h1>
              <iframe src="https://open.spotify.com/embed/playlist/7mZZkjpyoY83wHbssEtzNF" width="700" height="580" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>
            <div class="playlist-container">
              <h1 class="display-1 mx-auto titulo titulo-playlist" id="meditation">Meditation</h1>
              <iframe src="https://open.spotify.com/embed/playlist/37i9dQZF1DX9uKNf5jGX6m" width="700" height="580" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>
          </div>
        </div>
        <img src="../img/wave5.png" class="ola">
      </main>
      <?php include '../php/cielo.php' ?>
      <?php include '../php/footer.php'?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="../src/index.js"></script>
</html>