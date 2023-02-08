<?php
require(__DIR__ . '/_config/loader.php');
require(__DIR__ . '/_config/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php include(__DIR__ . '/includes/head.php'); ?>
<body>
<?php include(__DIR__ . '/includes/preloader.php'); ?>

<?php include(__DIR__ . '/includes/header.php'); ?>

<section class="breadcrumb-section" style="background-image: url('https://i.imgur.com/KQBOf0v.png')">
    <div class="container">
        <h1>CPA</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">CPA</li>
        </ol>
    </div><!-- /.container -->
</section><!-- /.breadcrumb-section -->

<div class="sa-section">
    <div class="section-content section-padding pb-0 tutor-content text-center">
        <div class="container">
            <?php
            if ($config['ies'] == 'eesap') {
                echo '<div class="row" style="justify-content: center">
                <div class="col-md-6 col-lg-5">
                    <div class="sa-post">
                        <div class="entry-header">
                            <div class="entry-thumbnail" style="height: 300px;">
                                <a href="../_lixo/blog-details.html"><img src="https://i.imgur.com/L5GBSId.jpeg" alt="Image"
                                                                       class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="entry-content" style="height: 160px;">
                            <h2 class="entry-title"><a href="../_lixo/blog-details.html">Iago Rodrigues Fernandes Moreira</a>
                            </h2>
                            <p>Representante dos Profissionais Técnico-Administrativos</p>
                        </div>
                    </div><!-- /.sa-post -->
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="sa-post">
                        <div class="entry-header">
                            <div class="entry-thumbnail" style="height: 300px;">
                                <a href="../_lixo/blog-details.html"><img src="https://i.imgur.com/tTkzDCM.jpg" alt="Image"
                                                                       class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="entry-content" style="height:160px;">
                            <h2 class="entry-title"><a href="../_lixo/blog-details.html">Ana Cristina de Oliveira Borba Paulino</a>
                            </h2>
                            <p>Coordenadora da CPA e Representando Docente</p>
                        </div>
                    </div><!-- /.sa-post -->
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="sa-post">
                        <div class="entry-header">
                            <div class="entry-thumbnail" style="height: 300px;">
                                <a href="../_lixo/blog-details.html"><img src="https://i.imgur.com/mvsuKAQ.jpg" alt="Image"
                                                                       class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="entry-content" style="height: 160px;">
                            <h2 class="entry-title"><a href="../_lixo/blog-details.html">Ruan Clementino De Souza</a>
                            </h2>
                            <p>Representando Discente</p>
                        </div>
                    </div><!-- /.sa-post -->
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="sa-post">
                        <div class="entry-header">
                            <div class="entry-thumbnail" style="height: 300px;">
                                <a href="../_lixo/blog-details.html"><img src="https://i.imgur.com/KbDt6T5.jpg" alt="Image"
                                                                       class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="entry-content" style="height: 160px;">
                            <h2 class="entry-title"><a href="../_lixo/blog-details.html">Sofia Nóbrega Meireles</a>
                            </h2>
                            <p>Representando a Sociedade Civil</p>
                        </div>
                    </div><!-- /.sa-post -->
                </div>
            </div>';
            } else {
                echo '<div class="row" style="justify-content: center">
                <div class="col-md-6 col-lg-5">
                    <div class="sa-post">
                        <div class="entry-header">
                            <div class="entry-thumbnail" style="height: 300px;">
                                <a href="../_lixo/blog-details.html"><img src="https://i.imgur.com/L5GBSId.jpeg" alt="Image"
                                                                       class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="entry-content" style="height: 160px;">
                                <h2 class="entry-title"><a href="../_lixo/blog-details.html">Iago Rodrigues Fernandes Moreira</a>
                            </h2>
                            <p>Representante dos Profissionais Técnico-Administrativos</p>
                        </div>
                    </div><!-- /.sa-post -->
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="sa-post">
                        <div class="entry-header">
                            <div class="entry-thumbnail" style="height: 300px;">
                                <a href="../_lixo/blog-details.html"><img src="https://i.imgur.com/tTkzDCM.jpg" alt="Image"
                                                                       class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="entry-content" style="height:160px;">
                            <h2 class="entry-title"><a href="../_lixo/blog-details.html">Ana Cristina de Oliveira Borba Paulino</a>
                            </h2>
                            <p>Coordenadora da CPA e Representando Docente</p>
                        </div>
                    </div><!-- /.sa-post -->
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="sa-post">
                        <div class="entry-header">
                            <div class="entry-thumbnail" style="height: 300px;">
                                <a href="../_lixo/blog-details.html"><img src="https://i.imgur.com/lRXkhdB.jpg" alt="Image"
                                                                       class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="entry-content" style="height: 160px;">
                            <h2 class="entry-title"><a href="../_lixo/blog-details.html">Luciana Neres de Souza Silva</a>
                            </h2>
                            <p>Representando Discente</p>
                        </div>
                    </div><!-- /.sa-post -->
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="sa-post">
                        <div class="entry-header">
                            <div class="entry-thumbnail" style="height: 300px;">
                                <a href="../_lixo/blog-details.html"><img src="https://i.imgur.com/kgJykGQ.jpg" alt="Image"
                                                                       class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="entry-content" style="height: 160px;">
                            <h2 class="entry-title"><a href="../_lixo/blog-details.html">Demócrito Borges da Silva Júnior</a>
                            </h2>
                            <p>Representando a Sociedade Civil</p>
                        </div>
                    </div><!-- /.sa-post -->
                </div>
            </div>';
            }
            ?>
            <div class="col-md-10" style="margin: 0 auto;">
                <p>A Comissão Própria de Avaliação (CPA) é responsável por coordenar a auto avaliação institucional,
                    desde a
                    elaboração do método, passando por sua implementação e sistematização dos resultados, até a
                    elaboração
                    do Relatório Anual de Avaliação Institucional, que subsidia os Planejamentos Administrativo,
                    Pedagógico
                    e Estratégico da Instituição e é usado pelo INEP/MEC para o recredenciamento institucional e
                    reconhecimento dos cursos, entre outras atividades.</p>
                <p>A avaliação institucional da <?= $config['sigla'] ?> está em obediência à Legislação de Ensino
                    Superior
                    do
                    MEC que estabelece o Sistema de Avaliação da Educação Superior – SINAES (Lei N°10.861 de 14/04/2004,
                    Portaria MEC Nº 2.051 de 09/07/2004 e Decreto Nº 5.773, de 09/05/2006).</p>
                <p>A avaliação interna integra o processo didático-pedagógico relacionado ao desenvolvimento da
                    instituição,
                    que inclui as atividades de ensino, pesquisa, extensão, gestão, corpo social e infraestrutura e
                    logística envolvendo todos os seus aspectos.</p>
            </div>

        </div><!-- /.container -->
        <?php
        if ($config['ies'] == 'eesap') {
            include("includes/conquista-cpa-eesap.php");
        } else {
            include("includes/conquista-cpa-ftm.php");
        }
        ?>
    </div><!-- /.section-content -->
</div><!-- /.sa-section -->

<?php include(__DIR__ . '/includes/redes-sociais.php'); ?>
<?php include(__DIR__ . '/includes/footer.php'); ?>

<!-- JS -->
<script src="<?= $config['url_site'] ?>assets/js/jquery.min.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/popper.min.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/bootstrap.min.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/inview.min.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/slick.min.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/jquery-ui-min.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/jarallax.min.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/counterup.min.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/waypoints.min.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/YTPlayer.min.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/validate.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/main.js"></script>
</body>
</html>