<?php

include ('conexao.php');

if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["senha"])) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = ($_POST["senha"]);

    $query = "INSERT INTO usuarios (nome, email, senha) VALUES ('{$nome}', '{$email}', '{$senha}')";
    
    $res = $mysqli->query($query);
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>CADASTRO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<!--===============================================================================================-->
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
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
                            <form class="login100-form validate-form" method="POST" action="">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Cadastro
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Informe seu nome.">
						<input class="input100" type="text" name="nome" placeholder="Nome">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Email não pode ser vazio.">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
                                
                                        <div class="wrap-input100 validate-input" data-validate="Informe uma senha valida.">
						<input class="input100" type="password" name="senha" placeholder="Senha">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

                                        <div class="container-login100-form-btn">
                                            <button class="login100-form-btn" type="submit">
							Cadastrar-se
						</button>
					</div>
                                        
                                        <a href="login.php">
                                        <div class="cadastro">                                     
                                                <h6>Já possui conta? Realizar login.</h6>
					</div>
                                        </a>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>