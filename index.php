<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>PHP Explorer</title>
  <style>
    :not(a, i, button) {
      cursor: default;
    }

    .text-purple {
      color: var(--bs-purple) !important;
    }

    .btn-outline-purple:hover,
    .btn-outline-purple:active {
      background-color: var(--bs-purple) !important;
      color: var(--bs-white) !important;
    }

    .btn-outline-purple,
    .btn-outline-purple:visited {
      border-color: var(--bs-purple) !important;
      color: var(--bs-purple);
    }

    .btn-purple:hover,
    .btn-purple:active {
      color: var(--bs-purple) !important;
      border-color: var(--bs-purple) !important;
      background-color: var(--bs-transparent) !important;
    }

    .btn-purple,
    .btn-purple:visited {
      background-color: var(--bs-purple) !important;
      color: var(--bs-white);
    }
  </style>
</head>

<body class="container-fluid d-flex flex-column align-items-center justify-content-center min-vh-100">
  <div class="container my-5 d-flex flex-column justify-content-center align-items-center">

    <h1>Explorador de Projetos</h1>

    <div class="d-flex flex-row gap-3 flex-wrap my-5 w-75 border bg-light p-5 rounded shadow-lg">
      <?php
      $pasta = './'; // Caminho da pasta que deseja listar
      
      $diretorio = new DirectoryIterator($pasta);
      foreach ($diretorio as $arquivo) {
        if (!$arquivo->isFile() && !$arquivo->isDot()) { // Verifica se é um arquivo
          $arquivo = $arquivo->getFilename();
          echo "<a class=\"btn btn-purple\"" . " href=\"$arquivo/\">" . $arquivo . "</a><br>";
        }
      }
      ?>
    </div>
  </div>
  <p class="lead text-center d-flex align-items-end justify-content-center opacity-50 fs-6 mt-auto">&copy; 2024&nbsp;<a
      class="text-muted text-decoration-none" href="https://github.com/Devrenj">@Devrenj</a>&nbsp;under MIT license</p>
</body>

</html>