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
    <h2 class="header-title">OMS</h2>
  </header>
  <?php include '../sent/nav.php'?>
      <main class="main">
        <img src="../img/omslogo.png" id="oms-logo" class="img-fluid mx-auto">
        <h1 class="titulo mx-auto" style="color: black; text-shadow: none;">¿Qué es la actividad física?</h1>
        <p class="w-75 mx-auto">La OMS define la actividad física como cualquier movimiento corporal producido por los músculos esqueléticos, con el consiguiente consumo de energía. Ello incluye las actividades realizadas al trabajar, jugar y viajar, las tareas domésticas y las actividades recreativas. <br><br>
          La expresión «actividad física» no se debería confundir con «ejercicio», que es una subcategoría de actividad física que se planea, está estructurada, es repetitiva y tiene como objetivo mejorar o mantener uno o más componentes del estado físico. La actividad física —tanto moderada como intensa— es beneficiosa para la salud.<br><br>
          Además del ejercicio, cualquier otra actividad física realizada en el tiempo de ocio, para desplazarse de un lugar a otro o como parte del trabajo, también es beneficiosa para la salud. La actividad física —tanto moderada como intensa— es beneficiosa para la salud.
          </p>
        <h1 class="titulo mx-auto" style="color: black; text-shadow: none">¿Cuánta actividad física se recomienda?</h1>
        <h3 class="mx-auto">Recomendaciones de la OMS:</h3>
        <div class="row ml-2 mr-2">
          <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Para niños y adolescentes de 5 a 17 años de edad</a>
              <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Para adultos de 18 a 64 años de edad</a>
              <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Para adultos de 65 o más años de edad</a>
            </div>
          </div>
          <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <ul class="list-group list-group-flush mx-auto">
                  <li class="list-group-item"><i class="fas fa-check-circle mr-3"></i>Practicar al menos 60 minutos diarios de actividad física moderada o intensa.</li>
                  <li class="list-group-item"><i class="fas fa-check-circle mr-3"></i>Duraciones superiores a los 60 minutos de actividad física procuran aún mayores beneficios para la salud.</li>
                  <li class="list-group-item"><i class="fas fa-check-circle mr-3"></i>Ello debe incluir actividades que fortalezcan los músculos y huesos, por lo menos tres veces a la semana.</li>
                </ul>
              </div>
              <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                <ul class="list-group list-group-flush mx-auto">
                  <li class="list-group-item"><i class="fas fa-check-circle mr-3"></i>Practicar al menos 150 minutos semanales de actividad física moderada, o al menos 75 minutos semanales de actividad física intensa, o una combinación equivalente entre actividad moderada e intensa.</li>
                  <li class="list-group-item"><i class="fas fa-check-circle mr-3"></i>Para obtener mayores beneficios para la salud los adultos deben llegar a 300 minutos semanales de actividad física moderada, o su equivalente.</li>
                  <li class="list-group-item"><i class="fas fa-check-circle mr-3"></i>Conviene realizar las actividades de fortalecimiento muscular 2 o más días a la semana y de tal manera que se ejerciten grandes conjuntos musculares.</li>
                </ul>
              </div>
              <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                <ul class="list-group list-group-flush mx-auto">
                  <li class="list-group-item"><i class="fas fa-check-circle mr-3"></i>Practicar al menos 150 minutos semanales de actividad física moderada, o al menos 75 minutos semanales de actividad física intensa, o una combinación equivalente entre actividad moderada e intensa.</li>
                  <li class="list-group-item"><i class="fas fa-check-circle mr-3"></i>Para obtener mayores beneficios para la salud estas personas deben llegar a 300 minutos semanales de actividad física moderada, o su equivalente.</li>
                  <li class="list-group-item"><i class="fas fa-check-circle mr-3"></i>Las personas con problemas de movilidad deben practicar actividad física para mejorar su equilibrio y prevenir caídas por lo menos 3 días a la semana.</li>
                  <li class="list-group-item"><i class="fas fa-check-circle mr-3"></i>Conviene realizar las actividades de fortalecimiento muscular 2 o más días a la semana y de tal manera que se ejerciten grandes conjuntos musculares.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <h3 class="mt-5 ml-4 mr-4">La intensidad con que se practican distintas formas de actividad física varía según las personas. Para que beneficie a la salud cardiorrespiratoria, toda actividad debe realizarse en periodos de al menos 10 minutos de duración.</h3>
        <h1 class="titulo mx-5" style="color: black; text-shadow: none">Beneficios de la actividad física y riesgos de un nivel insuficiente de actividad física</h1>
        <p class="w-75 mx-auto">La actividad física regular de intensidad moderada —como caminar, montar en bicicleta o hacer deporte— tiene considerables beneficios para la salud. En todas las edades, los beneficios de la actividad física contrarrestan los posibles daños provocados, por ejemplo, por accidentes. Realizar algún tipo de actividad física es mejor que no realizar ninguna. Volviéndonos más activos a lo largo del día de formas relativamente simples podemos alcanzar fácilmente los niveles recomendados de actividad física.</p>
        <h3 class="mx-5 my-5">La actividad física regular y en niveles adecuados:</h3>
        <ul class="list-group list-group-flush w-75 mx-auto">
          <li class="list-group-item"><i class="fas fa-check mr-2" style="color: green;"></i>Mejora el estado muscular y cardiorrespiratorio</li>
          <li class="list-group-item"><i class="fas fa-check mr-2" style="color: green;"></i>Mejora la salud ósea y funcional</li>
          <li class="list-group-item"><i class="fas fa-check mr-2" style="color: green;"></i>Reduce el riesgo de hipertensión, cardiopatía coronaria, accidente cerebrovascular, diabetes, diferentes tipos de cáncer (como el cáncer de mama y el de colon) y depresión</li>
          <li class="list-group-item"><i class="fas fa-check mr-2" style="color: green;"></i>Reduce el riesgo de caídas y de fracturas vertebrales o de cadera</li>
          <li class="list-group-item"><i class="fas fa-check mr-2" style="color: green;"></i>Es fundamental para el equilibrio energético y el control de peso.</li>
        </ul>
        <div class="alert alert-danger mx-5 mt-5" role="alert">
          Cuidado con la falta de actividad física. Es más peligrosa de lo que crees.
        </div>
        <h3 class="w-75 mx-auto mt-3">La insuficiente actividad física, que es uno de los factores de riesgo de mortalidad más importantes a escala mundial, va en aumento en muchos países, lo que agrava la carga de enfermedades no transmisibles y afecta al estado general de salud de la población en todo el planeta. Las personas que no hacen suficiente ejercicio físico presentan un riesgo de mortalidad entre un <b>20% y un 30%</b> superior al de aquellas que son lo suficientemente activas.</h3>
        <img src="../img/wave5.png" class="ola">
      </main>
      <?php include '../sent/cielo.php' ?>
      <?php include '../sent/footer.php' ?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="../src/index.js"></script>
</html>