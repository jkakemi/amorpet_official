<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adote - AmorPet</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.js"></script>
</head>

<body>
        <?php
            include "php/cabecalho.php"; 
        ?>
    <div id="container-formulario">
        <form action="agradecimentoadotar.php" method="" id="formulario-adocao">
            <fieldset id="form-estilizado">
            <legend>Adoção de animais:</legend>
                <label class="label-nova" for="nome">
                    <i class="fas fa-user"></i> Nome:
                </label>
                <input type="text" name="nome" id="nome">
                <span class="error" id="erro-nome"></span>
                <label class="label-nova" for="email">
                    <i class="fas fa-envelope"></i> Email:
                </label>
                <input type="email" name="email" id="email">
                <span class="error" id="erro-email"></span>
                <label class="label-nova" for="email">
                    <i class="fas fa-envelope"></i> Telefone:
                </label>
                <input type="text" name="telefone" id="telefone">
                <span class="error" id="erro-telefone"></span>

                <label for="animal">Animal:</label>
                <select id="animal" name="animal">
                    <option value="">Selecione</option>
                    <option value="cachorro">Cachorro</option>
                    <option value="gato">Gato</option>
                </select>

                <div id="badge-container" class="custom-badge badge badge-light"></div>

                <label class="label-nova" for="mensagem">Raça do animal (opcional):</label>
                <textarea id="mensagem" name="mensagem" rows="4"></textarea>
                <button type="submit" id="verificar">Enviar</button>
            </fieldset>
        </form>
    </div>
        <?php
            include "php/rodape.php"; 
        ?>
    </div>
    <nav aria-label="breadcrumb" class="breadcrumb-container ml-auto mt-50">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">AmorPet</li>
            <li class="breadcrumb-item"><a href="adote.php">Adote</a></li>
        </ol>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>