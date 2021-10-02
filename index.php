<?php
include_once('banco/seguranca.php');
$rota = explode("-", $_GET['url'] ?? 'index');
if (file_exists("main/{$rota[0]}.php")) {
    $pagina = "main/{$rota[0]}.php";
} elseif (file_exists("main/{$rota[0]}.html")) {
    $pagina = "main/{$rota[0]}.html";
} else {
    $pagina = "main/inicio.html";
}
?>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LineUp TPP</title>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">
  <!-- Bootstrap core CSS -->
  <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <!-- Favicons -->
  <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png"
    sizes="180x180">
  <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32"
    type="image/png">
  <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16"
    type="image/png">
  <link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg"
    color="#008cff">
  <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#008cff">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link href="fontawesome-free/css/all.css" rel="stylesheet">
  <!--load all styles -->
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Fixed navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#"><i class="fas fa-home"></i> Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="lista_menu" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Mais
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="lista_menu">
              <li data-bs-toggle="modal" data-bs-target="#modal_form"><a class="dropdown-item" href="#"><i
                    class="fas fa-plus-circle"></i> Nova Atracação</a></li>
              <li><a class="dropdown-item" href="#"><i class="far fa-user"></i> Usuarios</a></li>
              <li><a class="dropdown-item" href="#"><i class="far fa-building"></i> Empresas</a></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-ship"></i> Navios</a></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-anchor"></i> Atracações</a></li>
            </ul>
          </li>
        </ul>
        <div class="dropdown">
          <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['usuario']; ?>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Sair</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <?php
include_once($pagina);
?>
  <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</html>