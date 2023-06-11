<?php
include ('conexao.php');
if(!isset($_SESSION)){
    session_start();
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro</title>
    	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="?page=lista">SISTEMA FUNCIONARIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <div class="navbarfun">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="?page=novo">Novo Funcionario</a>
        </li>
        </div>
        <div class="navbarfun">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=lista">Lista de Funcionarios</a>
        </li>
        </div>
        <div class="logout">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">Sair</a>
        </li>
        </div>
      </ul>
    </div>
  </div>
</nav>
      <div class="container">
          <div class="row">
              <div class="col mt-5">
    <?php
        include ('conexao.php');
        if (isset($_GET['page'])) {
         switch($_REQUEST["page"]){
            case "novo":
                include("novo-fun.php");
            break;
            case "lista":
                include("lista-fun.php");
            break;
            case "salvar":
                include("salvar-fun.php");
            break;
            case "editar":
                include("editar-fun.php");
            break;
            default;
                print "Bem vindo ao sistema de controle de fluxo de funcionarios. Escolha uma opção acima para usar o sistema.";
 
        }
}

    ?>
      </div>
      </div>
          </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>