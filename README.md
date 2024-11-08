# PHP Project Explorer

Com a simples finalidade de facilitar a minha vida, criei este script para:
- Iniciar um servidor PHP
- Abrir o navegador padrão direto no localhost
- Listar as pastas dos projetos PHP
- Abrir os projetos com um clique

>[!NOTE]
>Este projeto foi desenvolvido para Windows

# Clonando o projeto

Execute o terminal `Bash` ou outro de sua preferência, na raíz de diretórios dos seus projetos PHP, executando o comando:

`$ git clone git@github.com:devrenj/php-explorer.git`

E abra o arquivo `PHP_Server.bat`

# Open-source

O código é aberto para análise e cópias, te possibilitando verificar sua simplicidade e segurança

> PHP_Server.bat:
```
title PHP Explorer by @devrenj
:: PHP Explorer
:: Author: Roberto Nóbrega Jr.
:: Github: @devrenj
:: Linkedin: https://linkedin.com/in/devrenj

@echo off
:: Set a custom port here (default 8000)
set port=8000
echo [ Starting PHP server ]
echo Stop server by closing the window.
start /B php -S localhost:%port%
timeout /t 1 >nul
echo [ Opening localhost on default browser @ port %port% ]
echo Note: please, set 'index.php' on each sub-directory
start http://localhost:%port%
```

> index.php:
```html
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
```
```php
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
```
```html
    </div>
  </div>
  <p class="lead text-center d-flex align-items-end justify-content-center opacity-50 fs-6 mt-auto">&copy; 2024&nbsp;<a
      class="text-muted text-decoration-none" href="https://github.com/Devrenj">@Devrenj</a>&nbsp;under MIT license</p>
</body>

</html>
```

# Licensa

Copyright &copy; 2024 Roberto Nóbrega Jr. ([@devrenj](https://www.github.com/devrenj)) under MIT License