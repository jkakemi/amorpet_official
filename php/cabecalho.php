<?php

    echo <<<HTML
        <header>
            <div id="cabecalho">
                <nav class="navbar navbar-expand-lg fundo-cor fixed-top">
                    <div class="container-fluid">
                        <a id="titulo" class="navbar-brand" href="#">Amor<span class="cor-titulo">Pet</span></a>
                        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header borda-bottom">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Amor<span
                                        class="cor-titulo">Pet</span></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php">Início</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="sobrenos.php">Sobre nós</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="adote.php">Adote</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contato.php">Contato</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="consultar.php">Consulta</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header> 
    HTML;
?>