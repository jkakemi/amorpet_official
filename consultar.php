<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Consulta - AmorPet</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="js/script.js"></script>
</head>

<body>
    <?php

        include "php/cabecalho.php";

        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nome'])) {
            $nome = $_GET['nome'];

            require "php/conectaBD.php";
            $pdo = mysqlConnect();

            $sql = "SELECT * FROM form_contato WHERE nome LIKE :nome";

            // Preparar a instrução SQL
            $stmt = $pdo->prepare($sql);

            // Bind dos parâmetros
            $nome = '%' . $nome . '%'; // Adiciona % para corresponder a qualquer parte do nome
            $stmt->bindParam(':nome', $nome);

            // Executar a instrução SQL preparada
            $stmt->execute();

            echo "<div class='teste1 borda-superior telas-menores'>";
            echo "<main>";
            echo "<h2>Resultados da Busca</h2>";
            echo "<div class='resultados'>";
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<div>";
                echo "<p>Nome: " . htmlspecialchars($row['nome']) . "</p>";
                echo "<p>Telefone: " . htmlspecialchars($row['telefone']) . "</p>";
                echo "<p>Opção Selecionada: " . htmlspecialchars($row['opcao']) . "</p>";

                if (isset($row['opcao1'])) {
                    echo "<p>Opinião: " . htmlspecialchars($row['opcao1']) . "</p>";
                }

                echo "<hr>";
                echo "</div>";
            }
            echo "</div>";
            echo "<a href='consultar.php' class='btn btn-success'>Voltar à Consulta</a>";
            echo "</main>";
            echo "</div>";
        } else {
            echo "<div class='teste1 borda-superior telas-menores'>";
            echo "<main>";
            echo "<h2>Informe o nome para consultar:</h2>";
            echo "<form action='consultar.php' method='GET'>";
            echo "<div id='form-estilizado'>";
            echo "<label for='nome'>Nome:</label>";
            echo "<input type='text' id='nome' name='nome'>";
            echo "<button class='topo' type='submit'>Buscar</button>";
            echo "</div>";
            echo "</form>";
            echo "</main>";
            echo "</div>";
        }

        include "php/rodape.php";
    ?>

    <nav aria-label="breadcrumb" class="breadcrumb-container ml-auto mt-50">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">AmorPet</li>
            <li class="breadcrumb-item"><a href="consultar.php">Consultar</a></li>
        </ol>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>