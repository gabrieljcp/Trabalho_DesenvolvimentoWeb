<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Vagas de Emprego</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Vagas de Emprego</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Início</a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Vagas
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?page=cadastrar-vagas">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar-vagas">Listar</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Candidato
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?page=cadastrar-candidato">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar-candidato">Listar</a></li>
              </ul>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col mt-5">
          <?php
            include("config.php");

            switch (@$_REQUEST["page"]) {

              //candidato
              case 'cadastrar-candidato':
                include("pages/cadastrar-candidato.php");
                break;
              case 'listar-candidato':
                include("pages/listar-candidato.php");
                break;
              case 'salvar-candidato':
                include("pages/salvar-candidato.php");
                break; 
              case 'editar-candidato':
                include("pages/editar-candidato.php");
                break;  
              //vagas
              case 'cadastrar-vagas':
                include("pages/cadastrar-vagas.php");
                break;
              case 'listar-vagas':
                include("pages/listar-vagas.php");
                break;
              case 'salvar-vagas':
                include("pages/salvar-vagas.php");
                break;   

              default:
                print "<h1>Seja bem vindo ao sistema de vagas de emprego</h1>";
            }

          ?>
        </div>
      </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>