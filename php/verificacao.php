<?php
    $nome = htmlspecialchars($_POST["nome"], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
    $telefone = htmlspecialchars($_POST["telefone"], ENT_QUOTES, 'UTF-8');
    $notificacao = htmlspecialchars($_POST["receberNotificacoes"], ENT_QUOTES, 'UTF-8');

    $opcoes = array(
        "email" => "Email",
        "telefone" => "Telefone",
        "whatsapp" => "Whatsapp",
        "nenhum" => "Nenhum"
    );

    $DSR = array(
        "D" => "Dúvida",
        "S" => "Sugestão",
        "R" => "Reclamação"
    );

    echo "Nome: $nome<br>";
    echo "E-mail: $email<br>";
    echo "Telefone: $telefone<br>";
    echo "Deseja receber: $notificacao<br>";

    $opSelect = array();

    if (isset($_POST['box'])) {
        foreach ($_POST['box'] as $valor) {
            if (array_key_exists($valor, $opcoes)) {
                $opSelect[] = $opcoes[$valor];
            }
        }
    }

    if (!empty($opSelect)) {
        echo "Opções selecionadas: " . implode(", ", $opSelect) . "<br>";
    } else {
        echo "Nenhuma opção selecionada.<br>";
    }

    $option = htmlspecialchars($_POST["opcao"], ENT_QUOTES, 'UTF-8');
    if ($option) {
        echo "Opção selecionada: ";
        if (array_key_exists($option, $DSR)) {
            echo $DSR[$option] . "<br>";
        } else {
            echo "Seleção inválida<br>";
        }
    }
?>