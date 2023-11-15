<?php
    require "conectaBD.php";
    $pdo = mysqlConnect();

    try {
        // Verifica os dados recebidos do formulário
        var_dump($_POST);
        // Verifica se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recebe os valores do formulário
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $notificacao = isset($_POST["receberNotificacoes"]) ? 1 : 0;
            $opcao = isset($_POST["opcao"]) ? $_POST["opcao"] : null;
            $opcao1 = isset($_POST["opcao1"]) ? $_POST["opcao1"] : null;

            // Instrução SQL de inserção
            $sql = "INSERT INTO form_contato (nome, email, telefone, notificacao, opcao, opcao1)
            VALUES (:nome, :email, :telefone, :notificacao, :opcao, :opcao1)";

            // Preparar a instrução SQL
            $stmt = $pdo->prepare($sql);

            // Bind dos parâmetros
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->bindParam(':notificacao', $notificacao);
            $stmt->bindParam(':opcao', $opcao);
            $stmt->bindParam(':opcao1', $opcao1);

            if ($stmt->execute()) {
                echo "Registro inserido com sucesso!";
            } else {
                echo "Erro na inserção: " . $stmt->errorInfo()[2];
            }

            header("Location: ../agradecimento.php");
            exit();
        } 
        else {
            echo "<p class='mensagem-erro'>O formulário não foi enviado.</p>";
        }
    } catch (PDOException $e) {
        if ($e->getCode() == '23000' && strpos($e->getMessage(), 'Duplicate entry') !== false) {
            echo "<p class='mensagem-erro'>Erro: Já existe um registro com os mesmos valores únicos. Registro não foi salvo!</p>";
            echo "<a href='contato.php' class='btn btn-success'>Voltar ao formulário</a>";
            header("Location: ../erro.php");
            exit();
        } 
        // else {
        //     header("Location: ../erro.php");
        //     exit();
        // }
    } catch (Exception $e) {
        echo "<p class='mensagem-erro'>Ocorreu uma falha: " . $e->getMessage() . "</p>";
    }
?>
