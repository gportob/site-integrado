<?php
require(__DIR__ . '/_config/loader.php');
require(__DIR__ . '/_config/functions.php');
?>

<!DOCTYPE html>
<html lang="en">

<style>
    .address {
        height: 280px;
    }
    @media(max-width: 980px) {
        .title {
            display: none;
        }
        .address {
            height: 310px;
        }
    }
</style>

<?php include(__DIR__ . '/includes/head.php'); ?>
<body>
<?php include(__DIR__ . '/includes/preloader.php'); ?>

<?php include(__DIR__ . '/includes/header.php'); ?>

<section class="breadcrumb-section" style="background-image: url('https://i.imgur.com/G97vHnM.png')">
    <div class="container">
        <h1>Sobre Nós</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $config['url_site'] ?>">Início</a></li>
            <li class="breadcrumb-item">Sobre Nós</li>
        </ol>
    </div><!-- /.container -->
</section><!-- /.breadcrumb-section -->

<div class="sa-section">
    <div class="section-content sa-about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-thumb">
                        <img src="<?= $config['foto-sobre'] ?>" alt="Image" class="img-fluid">
                    </div>
                    <h6>Seja um aluno da <?= $config['sigla'] ?>, faça o seu vestibular! Seu sucesso começa
                        agora.</h6>
                    <a href="#" class="btn btn-primary">Inscrição</a>
                    <h2 style="margin-top: 20px">Documentos</h2>
                    <h6>Regimento: <a style="color: #C9070D"
                                      href="https://eesap.educasystem.com.br/aluno/annexes/sendfiles/3b0423c182045897f054636cea8c43a0.pdf?_ga=2.32493886.163469610.1671727797-559588141.1671727797">Clique
                            aqui</a></h6>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="section-header">
                        <div class="title">
                            <h1>SOBRE NÓS</h1>
                            <span>Sobre</span>
                        </div>
                    </div>
                    <div class="about-info">
                        <?php
                        if ($config['ies'] == 'ftm') {
                            $consult = $pdo->query("SELECT * FROM news WHERE id = 430;");
                        } else {
                            $consult = $pdo->query("SELECT * FROM news WHERE id = 327;");
                        }
                        $data = $consult->fetch(PDO::FETCH_ASSOC);
                        ?>
                        <h2><?= $data['title'] ?></h2>
                        <p><?= $data['content'] ?></p>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- /.section-content -->
    <div class="container">
        <div class="address-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="address">
                        <div class="icon">
                            <i class="fa fa-crosshairs" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>MISSÃO</h3>
                            <p>Produzir, organizar e expandir conhecimentos por meio de atividades de ensino, iniciação
                                à pesquisa e extensão, formando sujeitos atuantes realidade em que estão inseridos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="address">
                        <div class="icon">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>VISÃO</h3>
                            <p>Ser reconhecida regionalmente enquanto instituição de ensino superior por meio
                                da oferta qualificada de cursos de graduação e de pós-graduação de alto nível.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="address">
                        <div class="icon">
                            <i class="fa fa-gem" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>VALORES</h3>
                            <p>Gestão consciente, ética, respeito mútuo, qualidade de ensino, e compromisso
                                social.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="address">
                        <div class="icon">
                            <i class="fas fa-sync"></i>
                        </div>
                        <div class="text">
                            <h3>METODOLOGIA</h3>
                            <p>Vai ao encontro a concepção de Educação Integral que amplia significativamente
                                as dimensões do educando.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!-- /.sa-section -->


<?php include(__DIR__ . '/includes/opiniao-alunos.php'); ?>
<?php include(__DIR__ . '/includes/noticia.php'); ?>
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