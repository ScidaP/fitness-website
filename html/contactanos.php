<?php 
  include("../php/Mailer/src/PHPMailer.php");
  include("../php/Mailer/src/SMTP.php");
  include("../php/Mailer/src/Exception.php");
  
$result = "";

  $mail = new PHPMailer\PHPMailer\PHPMailer();
    if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $userEmail = $_POST['email'];
      $subject = $_POST['subject'];
      $bodyEmail = $_POST['msg'];
  
      $fromemail = "befitsmtp@gmail.com";
      $fromname = $name;
      $host = "smtp.gmail.com";
      $port = "587";
      $SMTPAuth = "login";
      $SMTPSecure = "tls";
      $password = "octavioberarducci23";
      $emailTo = "webbefitness@gmail.com";
  
      $mail->isSMTP();
      $mail->SMTPDebug = 0;
      $mail->Host = $host;
      $mail->Port = $port;
      $mail->SMTPAuth = $SMTPAuth;
      $mail->SMTPSecure = $SMTPSecure;
      $mail->Username = $fromemail;
      $mail->Password = $password;
  
      $mail->setFrom($fromemail, $fromname);
      $mail->addAddress($emailTo);
  
      $mail->isHTML(true);
      $mail->Subject = "Asunto: $subject";
      $mail->Body = "<h1>ESTE ES UN MAIL ENVIADO POR EL USUARIO $name DESDE LA PÁGINA CONTÁCTANOS</h1><br>
      <h2>Nombre del usuario: $name</h2> <br> 
      <h2>Email del usuario: $userEmail</h2> <br> 
      <strong style=\"font-size: 2em\">Mensaje:</strong> <p style=\"font-size: 1.3em\">$bodyEmail</p>";
  
  
      if (!$mail->send()) {
        $result = "Algo no funcionó. Intenta nuevamente.";
      } else {
        $result = "Gracias $name, nos contactaremos contigo a la brevedad.";
      }
    }
?>
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="../index.html"><img src="../img/logo.png" class="logo-web"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="../index.html">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ejer_conpesa.html">Ejercicios con Pesas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ejer_sinpesa.html">Ejercicios sin Pesas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cardio.html">Cardio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="nutricion.html">Nutrición</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Música
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="musica/musicachill.html">Chill</a>
                <a class="dropdown-item" href="musica/musicaintensa.html">Intenso</a>
                <a class="dropdown-item" href="musica/musicaeningles.html">En Inglés</a>
                <a class="dropdown-item" href="musica/musicaregueton.html">Reguetón</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="compartir.html">Compartir</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contactanos.html">Contáctanos</a>
            </li>
          </ul>
        </div>
      </nav>
      <main class="main">
        <h1 class="display-1 mx-auto titulo" style="font-size: 4em;">Mándanos un mensaje</h1>
        <h5 class="text-center text-success"><?= $result;?></h5>
        <form class="w-100 mx-auto text-center" action="" method="POST">
          <div class="input-group mb-4 w-50 mx-auto">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-user"></i></div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa tu nombre" name="name" required>
          </div>
          <div class="input-group mb-4 w-50 mx-auto">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-at"></i></div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa tu email" name="email" required>
          </div>
          <div class="input-group mb-4 w-50 mx-auto">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-envelope"></i></div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa el asunto" name="subject" required>
          </div>
          <div class="input-group mb-4 w-50 mx-auto">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-comment-alt"></i></div>
            </div>
            <textarea class="form-control" id="validationTextarea" placeholder="Escriba su mensaje" cols="30" rows="6" name="msg" required></textarea>
          </div>
          <div class="container-submit">
            <input class="btn btn-primary w-25 mt-4 mb-5" type="submit" value="Enviar" name="submit">
          </div>
        </form>
      </main>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>