<html>
<head>
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
<div class="titulosub">                                     
  <h5>Lista Funcionarios</h5>
</div>
<?php
include ('conexao.php');
    $lista = "SELECT * FROM funcionarios";
    
    $res = $mysqli->query($lista);
    
    $qtd = $res->num_rows;
    
    if($qtd > 0){
        print"<table class='table table-hover table-striped table-bordered'>";
        print"<tr>";
        print"<th>Nome</th>";
        print"<th>CPF</th>";
        print"<th>Telefone</th>";
        print"<th>PIS</th>";
        print"<th>Cargo</th>";
        print"<th>Data de Nascimento</th>";
        print"<th>Salario</th>";
        print"<th>Interagir</th>";
        print"</tr>";
        while($row = $res->fetch_object()){ 
            print "<tr>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->cpf."</td>";
            print "<td>".$row->telefone."</td>";
            print "<td>".$row->pis."</td>";
            print "<td>".$row->cargo."</td>";
            print "<td>".$row->data_nasc."</td>";
            print "<td>".$row->salario."</td>";
            print "<td>
            <button onclick=\"location.href='?page=editar&id=".$row->id."';\"  class='btn btn-success'>Editar</button>
            <button onclick=\"if(confirm('Deseja demitir esse funcionario?')) {
            location.href='?page=salvar&acao=excluir&id=".$row->id."'; } else { false; }\" class='btn btn-danger'>Demitir</button>
            </td>";
            print "</tr>";
        }
        print"</table>";
    }else{
        print "<p class='alert alert-danger'> Nenhum funcionario contratado.</p>";
    }
?>
</body>
</html>
