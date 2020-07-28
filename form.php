<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
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
            <li><a class="active" href="form.php">Formulário</a></li>
            <li><a href="select.php">Dados</a></li>
        </ul>
    </nav>
    
    <div class="wrapper">
        <div class="form">
            <form name="formulario" action="insert.php" method="post">
                <h2>Testes do COVID-19</h2>    
                <div class="form1">
                    <label>RG:</label>
                    <input type="text" name="rg" class="input" placeholder="Não é possível alterar depois de salvo">

                    <label>Nome:</label>
                    <input type="text" name="nome" class="input">

                    <label>Sexo:</label><br>
                    <div class="input">
                        <input type="radio" name="sexo" value="Masculino">Masculino
                        <input type="radio" name="sexo" value="Feminino">Feminino
                    </div>

                    <label>Data de Nascimento:</label>
                    <input type="date" name="dtNasc" class="input">
                </div>
                <div class="form2">
                    <label>Estado:</label>
                    <select name="estado" class="input1">
                        <option value="">Selecione</option>
                        <option value="Acre">AC</option>
                        <option value="Alagoas">AL</option>
                        <option value="Amazonas">AM</option>
                        <option value="Amapá">AP</option>
                        <option value="Bahia">BA</option>
                        <option value="Ceará">CE</option>
                        <option value="Distrito Federal">DF</option>
                        <option value="Espírito Santo">ES</option>
                        <option value="Goiás">GO</option>
                        <option value="Maranhão">MA</option>
                        <option value="Minas Gerais">MG</option>
                        <option value="Mato Grosso do Sul">MS</option>
                        <option value="Mato Grosso">MT</option>
                        <option value="Pará">PA</option>
                        <option value="Paraíba">PB</option>
                        <option value="Pernambuco">PE</option>
                        <option value="Piauí">PI</option>
                        <option value="Paraná">PR</option>
                        <option value="Rio de Janeiro">RJ</option>
                        <option value="Rio Grande do Norte">RN</option>
                        <option value="Rio Grande do Sul">RS</option>
                        <option value="Rondônia">RO</option>
                        <option value="Roraima">RR</option>
                        <option value="Santa Catarina">SC</option>
                        <option value="Sergipe">SE</option>
                        <option value="São Paulo">SP</option>
                        <option value="Tocantins">TO</option>
                    </select>

                    <label>Logradouro:</label>
                    <input type="text" name="logradouro" class="input1">

                    <label>Número de Pessoas na Casa:</label>
                    <input type="text" name="numPessoa" class="input1">

                    <label>Resultado:</label>
                    <select name="result" class="input1">
                        <option value="Positivo">Positivo</option>
                        <option value="Negativo">Negativo</option>
                    </select>
                </div>
                <br>
                <div class="btn-submit">
                    <input type="submit" value="Salvar" class="submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>