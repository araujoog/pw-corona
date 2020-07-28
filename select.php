<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corona Crud &mdash; Davi Torres</title>

    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Coronavírus</label>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="form.php">Formulário</a></li>
            <li><a class="active" href="select.php">Dados</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="column">
            <form action="select.php" method="post">
                <input type="text" name="search" placeholder="Digite sua pesquisa" class="search">
                <input type="submit" value="Pesquisar" class="btn-search">
            </form>
            <div class="table">
                <table>
                    <th>RG</th>
                    <th>Nome</th>
                    <th>Sexo</th>
                    <th>Data de Nascimento</th>
                    <th>Estado</th>
                    <th>Logradouro</th>
                    <th>Pessoas na Casa</th>
                    <th>Resultado</th>
                    <th>Delete</th>
                    <th>Update</th>
                    <?php
                    include("conexao.php");
                    if(empty($_POST['search'])) {  
                        $select = mysqli_query($con, "SELECT * FROM pessoa");
                        while($arraySelect = mysqli_fetch_array($select)) {
                            echo "<tr>";
                            echo "<td>".$arraySelect[0]."</td>";
                            echo "<td>".$arraySelect[1]."</td>";
                            echo "<td>".$arraySelect[2]."</td>";
                            echo "<td>".$arraySelect[3]."</td>";
                            echo "<td>".$arraySelect[4]."</td>";
                            echo "<td>".$arraySelect[5]."</td>";
                            echo "<td>".$arraySelect[6]." pessoas na casa</td>";
                            echo "<td>".$arraySelect[7]."</td>";
                            echo "<td><a href='delete.php?id=".$arraySelect[0]."'>Excluir</a></td>";
                            echo "<td><a href='form-edit.php?id=".$arraySelect[0]."'>Editar</a></td>";
                            echo "</tr>";
                        }  
                    } else {
                        $buscar = $_POST['search']; 	
                        $search = mysqli_query($con, "SELECT * FROM pessoa WHERE nome LIKE '%$buscar%' ORDER BY nome");
                        
                        while($arraySearch = mysqli_fetch_array($search)) {
                            echo "<tr>";
                            echo "<td>".$arraySearch[0]."</td>";
                            echo "<td>".$arraySearch[1]."</td>";
                            echo "<td>".$arraySearch[2]."</td>";
                            echo "<td>".$arraySearch[3]."</td>";
                            echo "<td>".$arraySearch[4]."</td>";
                            echo "<td>".$arraySearch[5]."</td>";
                            echo "<td>".$arraySearch[6]." pessoas na casa</td>";
                            echo "<td>".$arraySearch[7]."</td>";
                            echo "<td><a href='delete.php?id=".$arraySearch[0]."'>Excluir</a></td>";
                            echo "<td><a href='form-edit.php?id=".$arraySearch[0]."'>Editar</a></td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

</body>
</html>