<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contato - AmorPet</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.js"></script>
</head>

<body>
    <!-- <div id="container"> -->
        <?php
            include "php/cabecalho.php"; 
        ?>
        <div id="container-formulario">
            <form action="php/tabela.php" enctype="multipart/form-data" autocomplete="on" method="POST">
                <div id="form-contato">
                <fieldset id="form-estilizado">
                    <legend>Entre em contato:</legend>
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
                    <label class="label-nova" for="telefone">
                        <i class="fas fa-user"></i> Telefone:
                    </label>
                    <input type="text" name="telefone" id="telefone">
                    <span class="error" id="erro-telefone"></span>
                    <label class="label-nova" for="opcoes-contato">
                        <i class="fas fa-phone"></i> Opções de contato:
                    </label>
                    <input type="checkbox" name="box" id="email" value="email">
                    <label for="email"><i class="fas fa-envelope"></i> E-mail</label>
                    <input type="checkbox" name="box" id="telefone" value="telefone">
                    <label for="telefone"><i class="fas fa-phone"></i> Telefone</label>
                    <input type="checkbox" name="box" id="whatsapp" value="whatsapp">
                    <label for="whatsapp"><i class="fab fa-whatsapp"></i> Whatsapp</label>
                    <input type="checkbox" name="box" id="nenhum" value="nenhum">
                    <label for="nenhum"><i class="far fa-circle"></i> Sem preferência</label>

                    <div>
                        <label for="opcao">Selecione uma das opções: </label>
                        <div>
                            <select name="opcao" id="opcao">
                                <option value="">Selecione</option>
                                <option value="D">Dúvida</option>
                                <option value="S">Sugestão</option>
                                <option value="R">Reclamação</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <textarea name="opcao1" id="opcao1" cols="30" rows="10" maxlength="2000"></textarea>
                    </div>
                    <label class="label-nova" for="receberNotificacoes">
                        <i class="far fa-bell"></i> Deseja receber notificações?
                    </label>
                    <label for="sim">Sim</label>
                    <input type="radio" name="receberNotificacoes" id="sim">
                    <label for="nao">Não</label>
                    <input type="radio" name="receberNotificacoes" id="nao">
                    <button id="verificar">Verificar</button>
                </fieldset>
                </div>
                <div id="visualizacao" style="display: none;">
                        <div id="dados-preenchidos">
                            <h2>Informações submetidas:</h2>
                            <p>Nome: <span id="nome-preenchido"></span></p>
                            <p>Email: <span id="email-preenchido"></span></p>
                            <p>Telefone: <span id="telefone-preenchido"></span></p>
                            <p>Opções contato: <span id="opcoes-contato-preenchido"></span></p>
                            <p>Selecionado: <span id="opcao-preenchida"></span></p>
                            <p>Texto: <span id="opcao1-preenchida"></span></p>
                            <p>Notificações ativas: <span id="receber-notificacoes-preenchido"></span></p>
                        </div>
                        <div id="buttons-container">
                            <button id="limpar" type="reset">Limpar e Recomeçar</button>
                            <button id="alterar" type="button">Alterar Dados</button>
                            <!-- <form action="php/tabela.php" enctype="multipart/form-data" autocomplete="on" method="POST" id="enviar-oficial"> -->
                            <button id="enviar" type="submit">Enviar</button>
                            <!-- </form> -->
                        </div>
                    </div>
            </form>
        </div>
        <!-- <div id="visualizacao" style="display: none;">
            <div id="dados-preenchidos">
                <h2>Informações submetidas:</h2>
                <p>Nome: <span id="nome-preenchido"></span></p>
                <p>Email: <span id="email-preenchido"></span></p>
                <p>Telefone: <span id="telefone-preenchido"></span></p>
                <p>Opções contato: <span id="opcoes-contato-preenchido"></span></p>
                <p>Selecionado: <span id="opcao-preenchida"></span></p>
                <p>Texto: <span id="opcao1-preenchida"></span></p>
                <p>Notificações ativas: <span id="receber-notificacoes-preenchido"></span></p>
            </div>
            <div id="buttons-container">
                <button id="limpar">Limpar e Recomeçar</button>
                <button id="alterar">Alterar Dados</button>
                <form action="php/tabela.php" enctype="multipart/form-data" autocomplete="on" method="POST" id="enviar-oficial">
                    <button id="enviar" type="submit">Enviar</button>
                </form>
            </div>
        </div> -->
        <?php
            include "php/rodape.php"; 
        ?>
    <!-- </div> -->
    <nav aria-label="breadcrumb" class="breadcrumb-container ml-auto mt-50">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">AmorPet</li>
            <li class="breadcrumb-item"><a href="contato.php">Contato</a></li>
        </ol>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>