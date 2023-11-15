<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Erro - AmorPet</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="js/script.js"></script>
</head>

<body>
        <?php
            include "php/cabecalho.php"; 
        ?>
        <div class="teste1 borda-superior telas-menores">
            <main>
                <h2>Erro ao enviar</h2>
                <p>Ocorreu um erro durante o processamento. Por favor, tente novamente mais tarde.</p>
                <a href="contato.php">Voltar ao formulário</a>
            </main>
        </div>
        <?php
            include "php/rodape.php"; 
        ?>
    <nav aria-label="breadcrumb" class="breadcrumb-container ml-auto mt-50">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">AmorPet</li>
            <li class="breadcrumb-item"><a href="contato.php">Contato</a></li>
        </ol>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>