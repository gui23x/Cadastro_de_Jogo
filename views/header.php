<!DOCTYPE html>
<?php
if (session_status() !== PHP_SESSION_ACTIVE){
    session_start();
}

if(!$_SESSION["emailUsuario"]){
    $_SESSION["msg"] = "<div class='alert alert-danger' role='alert'>Você não tem acesso a essa página.</div>";
    header("Location:../views/logar.php");
}else{
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Projeto PHP</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark borde-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="../views">Jogos on-line</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuários
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../views/cadastroUsuario.php">Cadastro</a></li>
            <li><a class="dropdown-item" href="../views/listaTudoUsuario.php">Visualizar</a></li>
            <li><a class="dropdown-item" href="../views/listaTudoUsuarioCod.php">Busca por Código</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Jogos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../views/cadastroJogos.php">Cadastro</a></li>
            <li><a class="dropdown-item" href="../views/listaTudoJogos.php">Visualizar Tudo</a></li>
            <li><a class="dropdown-item" href="listaTudoJogosCod.php">Busca por Código</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cliente
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../views/cadastroCliente.php">Cadastro</a></li>
            <li><a class="dropdown-item" href="../views/listaTudoClientes.php">Visualizar</a></li>
            <li><a class="dropdown-item" href="../views/listaTudoClientesNome.php">Busca por nome</a></li>
            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Funcionários
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../views/cadastroFuncionarios.php">Cadastro</a></li>
            <li><a class="dropdown-item" href="../views/listaTudoFuncionarios.php">Visualizar</a></li>
            <li><a class="dropdown-item" href="../views/listaTudoFuncionariosNome.php">Busca por Código</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pedidos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../views/cadastroPedido.php">Cadastro</a></li>
            <li><a class="dropdown-item" href="../views/listaTudoPedido.php">Visualizar</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" action="../controllers/sair.php">
        <button class="btn btn-outline-success" type="submit">Sair</button>
      </form>
    </div>
  </div>
</nav>
<?php
}
?>