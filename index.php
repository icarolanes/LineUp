<?php
include_once('banco/seguranca.php');
?>
<!doctype html>
<html lang="en">

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

  <main class="container">
    <div class="bg-light p-5 rounded">
      <h1>LineUp</h1>
      <div class="table-responsive">
        <table class="table table-sm" id="lista">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Navio</th>
              <th scope="col">Status</th>
              <th scope="col">Eta/Nor</th>
              <th scope="col">ETB</th>
              <th scope="col">ETS</th>
              <th scope="col">W.TIME</th>
              <th scope="col">CARGO</th>
              <th scope="col">AGENCIA</th>
              <th scope="col">QTD</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
      </div>
    </div>
  </main>
  <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script src="js/lineup.js"></script>
  <script>
  </script>
</body>

</html>

<!-- Modal -->
<div class="modal fade" id="modal_form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="modal_formLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_formLabel">Cadastro de Atracação</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="navio" placeholder="Navio" autocomplete="off">
            <label for="navio">Navio</label>
          </div>
          <div class="form-floating mb-3">
            <input type="number" inputmode="numeric" class="form-control" id="imo" placeholder="imo">
            <label for="imo">Imo</label>
          </div>
          <div class="form-floating mb-3">
            <input type="date" class="form-control" id="eta" placeholder="eta">
            <label for="eta">ETA/NOR</label>
          </div>
          <div class="form-floating mb-3">
            <input type="date" class="form-control" id="etb" placeholder="etb">
            <label for="etb">ETB</label>
          </div>
          <div class="form-floating mb-3">
            <input type="date" class="form-control" id="ets" placeholder="ets">
            <label for="ets">ETS</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control form-sm" id="cargo" placeholder="cargo">
            <label for="cargo">Carga</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control form-sm" id="agency" placeholder="agency">
            <label for="agency">Agência</label>
          </div>
          <div class="form-floating mb-3">
            <input type="number" inputmode="decimal" class="form-control form-sm" id="qtd" placeholder="qtd">
            <label for="qtd">Quantidade</label>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>