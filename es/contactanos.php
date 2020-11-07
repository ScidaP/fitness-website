<?php include '../sent/head.php' ?>
    <title>Contáctanos - BeFit</title>
</head>
<body>
  <header class="header">
  <h2 class="header-title">Contáctanos</h2>
  </header>
  <?php include '../sent/nav.php'?>
      <main class="main main-contactanos">
        <h1 class="display-1 mx-auto titulo contactanos-titulo" style="text-shadow: none; color: black;">Mándanos un mensaje</h1>
        <h5 class="text-center text-success"></h5>
        <form class="w-100 text-center" action="../sent/enviado" method="POST" id="form">
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
            <button class="btn btn-primary w-25 mt-4 mb-5" type="submit" name="submit"><i class="fas fa-paper-plane mr-2"></i>Enviar</button>
          </div>
        </form>
        <img src="../img/wave5.png" class="ola">
      </main>
      <?php include '../sent/footer.php'?>
</body>
<?php include '../sent/scripts.php' ?>