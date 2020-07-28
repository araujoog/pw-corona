<?php

include("conexao.php");
$rg = $_GET['id'];

mysqli_query($con, "DELETE FROM pessoa WHERE rg = ".$rg);
header("location:select.php");

?>