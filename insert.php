<?php

include("conexao.php");

$rg = $_POST['rg'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$dtNasc = $_POST['dtNasc'];
$estado = $_POST['estado'];
$logr = $_POST['logradouro'];
$nPerson = $_POST['numPessoa'];
$result = $_POST['result'];

mysqli_query($con, "INSERT INTO pessoa(rg, nome, sexo, dtNasc, estado, logradouro, numPessoa, resultado) 
VALUES ('$rg', '$nome', '$sexo', '$dtNasc', '$estado', '$logr', '$nPerson', '$result')");
header("location:form.php");

?>