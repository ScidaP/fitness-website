<?php 
  include("../sent/Mailer/src/PHPMailer.php");
  include("../sent/Mailer/src/SMTP.php");
  include("../sent/Mailer/src/Exception.php");
  
$result = "";
$colores = ["(239, 243, 17, 0.1)", "(86, 243, 176, 0.1)", "(14, 232, 209, 0.1)", "(8, 88, 218, 0.1)", "(130, 16, 231, 0.1)", "(231, 16, 208, 0.1)", "(89, 0, 218, 0.1)", "(243, 118, 0, 0.1)"];
$rand = mt_rand(0, 8);
$colorRandom = $colores[$rand];

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
      $password = 'f$DjhHki38$12n*mKcv$$123p*LmB)';
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
      $mail->Body = "<div style=\"border: 0.2em solid black; background-color: rgba$colorRandom; border-radius: 6px; width: 50%; margin: 0 auto; padding: 0.5em 1em;\">
      <h3 style=\"color: black;\">Este es un mail enviado por el usuario $name desde contáctanos.</h3>
      <p style=\"color: black;\">Nombre del usuario: $name</p>
      <p style=\"color: black;\">Email del usuario: $userEmail</p>
      <p style=\"color: black;\"><strong>Mensaje:<br></strong></p>
      <p style=\"color: black;\">$bodyEmail</p>
  </div>";
  
      if (!$mail->send()) {
        $result = "<h1 class=\"display-1 mx-auto titulo\" style=\"font-size: 4em; text-shadow: none; color: black;\">Algo se perdió...</h1>
        <h5 class=\"text-center text-fail\">No se pudo enviar el mail. Intenta de nuevo más tarde.</h5>";
      } else {
        $result = "<h1 class=\"display-1 mx-auto titulo\" style=\"font-size: 4em; text-shadow: none; color: black;\">¡Recibido!</h1>
        <h5 class=\"text-center text-success\">Gracias $name, nos contactaremos contigo a la brevedad.</h5>";
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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top nav-inicio">
        <a class="navbar-brand" href="../home"><img src="../img/logoblanco_texto.png" class="logo-web"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="../home">Inicio</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="../es/ejer_conpesa">Ejercicios con Pesas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../es/ejer_sinpesa">Ejercicios sin Pesas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../es/cardio">Cardio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../es/nutricion">Nutrición</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../es/musica">Música</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../es/oms">Oms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../es/contactanos">Contáctanos</a>
            </li>
          </ul>
        </div>
      </nav>
      <main class="main">
        <?= $result;?>
        <br>
        <h1 class="display-1 mx-auto titulo contactanos-titulo" style="text-shadow: none; color: black;">Seguí navegado</h1>
        <div class="row container-seguinavegando mx-auto">
          <div class="col-sm-6 card-enviado">
            <div class="card">
              <div class="card-body card-seguinavegando">
                <h5 class="card-title">Ejercicios con pesas</h5>
                <p class="card-text">Descubre los procedimientos correctos para realizar ejercicios con pesas.</p>
                <a href="#" class="btn btn-primary">Ir para ahí</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 card-enviado">
            <div class="card">
              <div class="card-body card-seguinavegando">
                <h5 class="card-title">Ejercicios sin pesas</h5>
                <p class="card-text">Descubre los procedimientos correctos para realizar ejercicios sin pesas.</p>
                <a href="#" class="btn btn-primary">Ir para ahí</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row container-seguinavegando mx-auto">
          <div class="col-sm-6 card-enviado">
            <div class="card">
              <div class="card-body card-seguinavegando">
                <h5 class="card-title">Cardio</h5>
                <p class="card-text">¿Es importante el cardio para una vida saludable? Averígualo.</p>
                <a href="#" class="btn btn-primary">Aprender más</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 card-enviado">
            <div class="card">
              <div class="card-body card-seguinavegando">
                <h5 class="card-title">Nutrición</h5>
                <p class="card-text">Una buena alimentación es clave para el desarrollo de nuestro cuerpo.</p>
                <a href="#" class="btn btn-primary">Muéstrame más</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row container-seguinavegando mx-auto">
          <div class="col-sm-6 card-enviado">
            <div class="card">
              <div class="card-body card-seguinavegando">
                <h5 class="card-title">OMS</h5>
                <p class="card-text">¿Cuál es la postura de la OMS frente a la educación física?</p>
                <a href="#" class="btn btn-primary">Ir para ahí</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 card-enviado">
            <div class="card">
              <div class="card-body card-seguinavegando">
                <h5 class="card-title">Contáctanos</h5>
                <p class="card-text">¿Tenés alguna duda? ¿Encontraste algún error? ¿Necesitas ayuda?</p>
                <a href="#" class="btn btn-primary">Ponte en contacto</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row container-seguinavegando mx-auto">
          <div class="col-sm-6 card-enviado">
            <div class="card">
              <div class="card-body card-seguinavegando">
                <h5 class="card-title">Ejercicios con pesas</h5>
                <p class="card-text">Descubre los procedimientos correctos para realizar ejercicios con pesas.</p>
                <a href="#" class="btn btn-primary">Ir para ahí</a>
              </div>
            </div>
          </div>
        </div>
        <img src="../img/wave5.png">
      </main>
      <?php require 'footer.php'?>
</body>
<?php include '../sent/scripts.php' ?>