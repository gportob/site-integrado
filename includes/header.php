<header class="sa-header">
    <div class="sa-topbar">
        <div class="container">
            <div class="topbar-content">
                <div class="left-content">
                    <ul class="global-list">
                        <li><a href="#"><i class="far fa-envelope"></i><?= $config['email-contato'] ?></a></li>
                        <li><a href="#"><i class="fas fa-phone-volume"></i>0800 083-2656</a></li>
                    </ul>
                </div>
                <div class="right-content">
                    <ul class="global-list social">
                        <?php
                        if ($config['ies'] == 'ftm') {
                            echo '<li>
                            <a href="https://conteudo.faculdadetresmarias.edu.br/quero-ser-parceiro?_ga=2.137138928.1174359660.1674488583-1623211788.1671726536" style="color: #ffbb00;">Seja um Gestor de Polo EAD</a>
                        </li>';
                        }
                        ?>
                        <li><a href="<?= $config['face'] ?>"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://api.whatsapp.com/send?phone=558000832656"><i
                                        class="fab fa-whatsapp"></i></a></li>
                        <li><a href="<?= $config['insta'] ?>"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    <ul class="global-list">
                        <li><a href="#" class="btn btn-primary">Inscrição</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- /.top-bar -->

    <div class="sa-menu">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?= $config['url_site'] ?>">
                    <img src="<?= $config['logo'] ?>" alt="Logo" class="img-fluid">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item sa-dropdown">
                            <a href="<?= $config['url_site'] ?>">Instituição</a>
                            <ul class="sa-dropdown-menu">
                                <li><a href="<?= $config['url_site'] ?>sobre">Sobre Nós</a></li>
                                <li><a href="<?= $config['url_site'] ?>estrutura">Estrutura</a></li>
                                <li><a href="<?= $config['url_site'] ?>cpa">CPA</a></li>
                                <?php
                                if ($config['ies'] == 'ftm') {
                                    echo '<li>
                            <a href="">Polos EAD</a>
                        </li>';
                                }
                                ?>
                                <li><a href="<?= $config['url_site'] ?>ouvidoria">Ouvidoria</a></li>
                                <li><a href="<?= $config['url_site'] ?>formas-de-ingresso">Formas de Ingresso</a></li>
                                <li><a href="<?= $config['docente'] ?>">Acesso Docente</a></li>
                                <li><a href="<?= $config['url_site'] ?>documentos">Documentos</a></li>
                                <li><a href="<?= $config['url_site'] ?>consulta-diploma">Consulta Publica de Diploma</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sa-dropdown">
                            <a href="#">Vestibular</a>
                            <ul class="sa-dropdown-menu">
                                <li><a href="<?= $config['ingresso'] ?>">Inscrição</a></li>
                                <li><a href="<?= $config['url_site'] ?>editais">Editais</a></li>
                            </ul>
                        </li>
                        <li class="sa-dropdown">
                            <a href="<?= $config['url_site'] ?>cursos">Cursos</a>
                            <ul class="sa-dropdown-menu">
                                <li><a href="<?= $config['url_site'] ?>cursos">Graduação Presencial</a></li>
                                <li><a href="<?= $config['url_site'] ?>cursos-ead">Graduação EAD</a></li>
                                <li><a href="<?= $config['url_site'] ?>cursos-pos">Pós-Graduação</a></li>
                            </ul>
                        </li>
                        <li class="sa-dropdown">
                            <a href="<?= $config['url_site'] ?>">Aluno</a>
                            <ul class="sa-dropdown-menu">
                                <li><a href="<?= $config['discente'] ?>">Aluno Online</a></li>
                                <?php
                                if ($config['ies'] == 'eesap') {
                                    echo '<li><a href="https://eesap.educasystem.com.br/annexes/docs/divers/documents_1a70c48bd95fa418608b9b77341d1c28.pdf?_ga=2.9881973.136617865.1674488015-559588141.1671727797">Regimento Biblioteca</a></li>';
                                } else {
                                    echo '<li><a href="https://funepi.educasystem.com.br/annexes/docs/divers/documents_728c1fc337f3e60034406986f0d98d91.pdf?_ga=2.204390096.1174359660.1674488583-1623211788.1671726536">Regimento Biblioteca</a></li>';
                                }
                                ?>

                                <li><a href="index.php">Manual de TCC</a></li>
                                <li><a href="<?= $config['url_site'] ?>periodicos">Periódicos</a></li>
                                <li><a href="index.php">Repositório de TCC</a></li>
                                <li><a href="index.php">Monitoria</a></li>
                            </ul>
                        </li>
                        <li><a href="<?= $config['url_site'] ?>noticias">Notícias</a></li>
                        <li class="sa-dropdown">
                            <a href="<?= $config['url_site'] ?>">Contato</a>
                            <ul class="sa-dropdown-menu">
                                <li><a href="<?= $config['url_site'] ?>contato">Fale Conosco</a></li>
                                <li><a href="<?= $config['url_site'] ?>trabalhe-conosco">Trabalhe Conosco</a></li>
                            </ul>
                        </li>
                        </li>
                        <li class="sa-dropdown">
                            <a href="#">Acessibilidade</a>
                            <ul class="sa-dropdown-menu">
                                <li><a href="index.php">NVDA(Download)</a></li>
                                <li><a href="https://www.gov.br/governodigital/pt-br/vlibras/">VLibras</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- /.container -->
        </nav><!-- /.navbar -->
    </div><!-- /.sa-menu -->
</header><!-- /.sa-header -->