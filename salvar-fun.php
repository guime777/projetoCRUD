<?php
include ('conexao.php');
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            if (isset($_POST["nome"]) && isset($_POST["cpf"]) && isset($_POST["telefone"])&& isset($_POST["pis"])&& isset($_POST["cargo"])&& isset($_POST["data_nasc"])&& isset($_POST["salario"])) {
            $nome = $_POST["nome"];
            $cpf = $_POST["cpf"];
            $telefone = $_POST["telefone"];
            $pis = $_POST["pis"];
            $cargo = $_POST["cargo"];
            $data_nasc = $_POST["data_nasc"];
            $salario = $_POST["salario"];
            
            $inserir = "INSERT INTO funcionarios (nome, cpf, telefone, pis, cargo, data_nasc, salario) VALUES('{$nome}','{$cpf}','{$telefone}','{$pis}','{$cargo}','{$data_nasc}','{$salario}')";
            
            $res = $mysqli->query($inserir); 
            
            if($res == true){
                print"<script> alert('Funcionario cadastrado com sucesso');</script>";
                print"<script> location.href='?page=lista';</script>";
            }
            
            }
            break;
        case 'editar':
            if (isset($_POST["nome"]) && isset($_POST["cpf"]) && isset($_POST["telefone"])&& isset($_POST["pis"])&& isset($_POST["cargo"])&& isset($_POST["data_nasc"])&& isset($_POST["salario"])) {
            $nome = $_POST["nome"];
            $cpf = $_POST["cpf"];
            $telefone = $_POST["telefone"];
            $pis = $_POST["pis"];
            $cargo = $_POST["cargo"];
            $data_nasc = $_POST["data_nasc"];
            $salario = $_POST["salario"];
            
            $sql = "UPDATE funcionarios SET nome='{$nome}',cpf='{$cpf}', telefone='{$telefone}',pis='{$pis}',cargo='{$cargo}',data_nasc='{$data_nasc}',salario='{$salario}' WHERE id=".$_REQUEST["id"];
            
            $res = $mysqli->query($sql); 
            
            if($res == true){
                print"<script> alert('Informação atualizada com sucesso.');</script>";
                print"<script> location.href='?page=lista';</script>";
            }
            }
            break;
        case 'excluir':
            $sql = "DELETE FROM funcionarios WHERE id=".$_REQUEST["id"];
            $res = $mysqli->query($sql);
            if($res == true){
                print"<script> alert('Demitido com sucesso.');</script>";
                print"<script> location.href='?page=lista';</script>";
            }
            break;
    }

