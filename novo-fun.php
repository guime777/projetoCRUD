<?php
include ('conexao.php');

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
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
		<div class="container-login100">
			<div class="wrap-login100">
                            <form class="login100-form validate-form" method="POST" action="?page=salvar">
                                <input type="hidden" name="acao" value="cadastrar">
                                        <div class="titulo">                                     
                                            <h5>Novo Funcionario</h5>
					</div>
                                        <div class="tela">                                     
                                            <h6>NOME:</h6>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Informe o nome do funcionario !">
						<input class="input100" type="text" name="nome" placeholder="Nome">
					</div>
                                        <div class="tela">                                     
                                            <h6>CPF:</h6>
					</div>
                                        <div class="wrap-input100 validate-input" data-validate = "Informe o CPF !">
						<input class="input100" type="number" name="cpf" placeholder="CPF">
					</div>
                                        <div class="tela">                                     
                                            <h6>TELEFONE:</h6>
					</div>
                                        <div class="wrap-input100 validate-input" data-validate = "Informe o celular !">
						<input class="input100" type="tel" name="telefone" placeholder="Telefone">
					</div>
                                        <div class="tela">                                     
                                            <h6>PIS:</h6>
					</div>
                                        <div class="wrap-input100 validate-input" data-validate = "Informe o PIS da carteira de trabalho !">
						<input class="input100" type="text" name="pis" placeholder="PIS">
					</div>
                                        <div class="tela">                                     
                                            <h6>CARGO:</h6>
					</div>
                                        <div class="wrap-input100 validate-input" data-validate = "Informe seu Cargo !">
						<input class="input100" type="text" name="cargo" placeholder="Cargo">
					</div>
                                        <div class="tela">                                     
                                            <h6>DATA DE NASCIMENTO:</h6>
					</div>
                                        <div class="wrap-input100 validate-input" data-validate = "Informe sua Data de Nascimento !">
						<input class="input100" type="date" name="data_nasc" placeholder="Data de Nascimento">
					</div>
                                        <div class="tela">                                     
                                            <h6>SALARIO:</h6>
					</div>
                                        <div class="wrap-input100 validate-input" data-validate = "Informe Seu Salario !">
						<input class="input100" type="number" name="salario" placeholder="Salario">
					</div>
					<div class="container-login100-form-btn">
                                            <button class="login100-form-btn" type="submit">
							INSERIR
						</button>
					</div>
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