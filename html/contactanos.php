<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@300;500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../css/fontawesomecss/all.min.css">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <title>BeFit</title>
</head>
<body>
  <header class="header">

  </header>
  <?php include '../php/nav.php'?>
      <main class="main main-contactanos">
        <h1 class="display-1 mx-auto titulo" style="font-size: 4em; text-shadow: none; color: black;">Mándanos un mensaje</h1>
        <h5 class="text-center text-success"></h5>
        <form class="w-100 text-center" action="../php/contactanos.php" method="POST" id="form">
          <div class="input-group mb-4 w-50 mx-auto">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-user"></i></div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa tu nombre" name="name" id="nombre" pattern="[A-Za-z]{2,30}" autocomplete="off" required>
          </div>
          <div class="input-group mb-4 w-50 mx-auto">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-at"></i></div>
            </div>
            <input type="text" class="form-control" id="email" placeholder="Ingresa tu email" name="email" onkeydown="validarEmail()" autocomplete="off" required>
          </div>
          <div class="input-group mb-4 w-50 mx-auto">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-envelope"></i></div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa el asunto" name="subject" minlength="2" maxlength="80" id="asunto" autocomplete="off" required>
          </div>
          <span id="contador"></span>
          <div class="input-group mb-4 w-50 mx-auto">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-comment-alt"></i></div>
            </div>
            <textarea class="form-control" id="validationTextarea" placeholder="Escriba su mensaje" cols="30" rows="6" name="msg" autocomplete="off" required></textarea>
          </div>
          <div class="container-submit">
            <input class="btn btn-primary w-25 mt-4 mb-5" type="submit" value="Enviar" name="submit">
          </div>
        </form>
        <img src="../img/wave5.png" class="ola">
      </main>
      <?php include '../php/footer.php'?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="../src/index.js"></script>
</html>