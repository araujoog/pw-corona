<?php

include("conexao.php");
$name = $_POST['nome'];
$sex = $_POST['sexo'];
$dataNasc = $_POST['dtNasc'];
$state = $_POST['estado'];
$lgr = $_POST['logradouro'];
$numPerson = $_POST['numPessoa'];
$resultado = $_POST['result'];


mysqli_query($con, "UPDATE pessoa SET nome='$name', dtNasc='$dataNasc', estado='$state', 
logradouro='$lgr', numPessoa='$numPerson', resultado='$resultado' WHERE rg=".$_GET['id']);
header("location:select.php");

?>