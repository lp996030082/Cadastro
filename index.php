<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="php.css">
    <title>página inicialt</title>
</head>
    <body>
    <nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Barra de navegação</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">#</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">#</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">#</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              #
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">#</a></li>
              <li><a class="dropdown-item" href="#">#</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">#</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<br>
<h1>Cadastro</h1>
        <form action="apresentar.php" method="get">
    <label>Nome Completo:</label>
    <input type="text" name="nome_completo"/><br/><br/>
    <label>País:</label>
    <input type="text" name="país"><br/><br/>
    <label>Estado:</label>
    <input type="text" name="estado"><br/><br/>
    <label>Cidade:</label>
    <input type="text" name="cidade"><br/><br/>
    <label>Endereço:</label>
    <input type="text" name="endereço"><br/><br/>
    <label>Data de nascimento:</label>
    <input type="text" name="data_de_nascimento"><br/><br/>
    <label>Genêro:</label>
    <input type="text" name="genêro"><br/><br/>
    <label>E-mail:</label>
    <input type="text" name="e-mail"><br/><br/>
    <label>Telefone:</label>
    <input type="text" name="telefone"><br/><br/>
    <label>CPF:</label>
    <input type="text" name="CPF"><br/><br/>
    <div class="botao">
    <input type="submit" value="entrar">
    <input type="reset" value="limpar">
    </div>
        </formm>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>