<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corona Crud &mdash; Davi Torres</title>

    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script type="text/javascript">
        function thanks(){
            alert("Obrigado pelo MB :)");
        }
    </script>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Coronavírus</label>
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="form.php">Formulário</a></li>
            <li><a href="select.php">Dados</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="wrap">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <i class="fab fa-wpforms i-form"></i>
                        <h3>Formulário</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Inserir dados no sistema EC do Coronavírus</p>
                        <a href="form.php">Redirecionar</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <i class="fas fa-user i-person"></i>
                        <h3>Desenvolvedor</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Projeto Escolar desenvolvido inteiramente pelo aluno Davi Torres Araújo.</p>
                        <a href="#" onclick="thanks()">Obrigado</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <i class="far fa-address-book i-data"></i>
                        <h3>Dados</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Verificar, excluir e alterar todos os dados cadastrados no sistema.</p>
                        <a href="select.php">Redirecionar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>