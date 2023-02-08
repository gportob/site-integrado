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

<section class="breadcrumb-section" style="background-image: url('https://i.imgur.com/qoiuaUU.png')">
    <div class="container">
        <h1>Graduação Presencial</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../_lixo/index.html">Início</a></li>
            <li class="breadcrumb-item">Cursos</li>
        </ol>
    </div><!-- /.container -->
</section><!-- /.breadcrumb-section -->
<?php
$idGalleryIcon = $pdo->query("SELECT id FROM gallery WHERE name = 'icon-course' LIMIT 0,1")->fetchColumn();

$consulta = $pdo->prepare("SELECT * FROM courses WHERE kind > 0 AND `level` = 1 ORDER by id DESC;");
$consulta->execute();
$consulta2 = $pdo->prepare("SELECT * FROM courses WHERE kind > 0 AND `level` = 2;");
$consulta2->execute();
?>
<div class="sg-page-content">
    <div class="sg-section">
        <div class="section-content sg-filter-content grid-view-tab section-padding">
            <div class="container">
                <div class="row">
                    <?php while ($linha = $consulta->fetch()) {
                        if (empty($linha['img']) and $linha['id'] > 46) {
                            if ($idGalleryIcon > 0) {
                                $imgCourse = "{$config['storage'] ['web']}annexes/";
                                $imgCourse .= $pdo->query("SELECT imagem FROM imagem WHERE tipo = 1 AND status = 0 AND titulo='{$linha['slug']}' AND gallery = $idGalleryIcon;")->fetchColumn();
                            } else {
                                $imgCourse = '#';
                            }
                        } else {
                            $imgCourse = "{$config['storage'] ['web']}assets/img/home1/courses/{$linha['id']}.jpg?nocache=1";

                        }

                        ?>
                        <?php if ($linha['modality'] == 1) { ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="sa-course">
                                    <span class="badges"><?= getReais($linha['price']) ?></span>
                                    <a href="<?= $config['url_site'] ?>curso/<?= $linha['id'] ?>/">
                                        <div class="course-thumb">
                                            <img src="<?= $imgCourse ?>" alt="Image" class="img-fluid">
                                            <div class="overlay">
                                                <div class="icons">
                                                    <p style="background: white; padding: 10px; font-weight: bold">Ver
                                                        Mais</p>
                                                </div>
                                            </div>
                                            <div class="rating-date align-self-end">
                                                <ul class="global-list d-flex star-rating align-self-center">
                                                    <li class="checked"><i class="fas fa-star"></i></li>
                                                    <li class="checked"><i class="fas fa-star"></i></li>
                                                    <li class="checked"><i class="fas fa-star"></i></li>
                                                    <li class="checked"><i class="fas fa-star"></i></li>
                                                    <li class="checked"><i class="fas fa-star"></i></li>
                                                </ul>
                                                <div class="date" style="text-align: end">
                                                    <span><img style="width: 15%;"
                                                               src="https://i.imgur.com/pRZhhP3.png"><?= $linha['turno_info'] ?></span>
                                                </div>
                                            </div><!-- /.rating-price -->
                                        </div>
                                    </a><!-- /.course-thumb -->

                                    <div class="course-info">
                                        <div class="info">
                                            <h2 class="title"><a
                                                        href="../_lixo/course-details.html"></a><?= $linha['name'] ?>
                                            </h2>
                                            <p><?= $linha['subtitle'] ?></p>
                                        </div>
                                        <div class="sa-meta">
                                            <ul class="global-list">
                                                <li><span><i
                                                                class="far fa-clock"></i></span><?= $linha['duration_info'] ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- /.curse-info -->
                                </div><!-- /.sg-course -->
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.section-content -->
    </div><!-- /.sg-section -->
</div><!-- /.sg-page-content -->

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
<script src="<?= $config['url_site'] ?>assets/js/jquery-ui-min.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/validate.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/main.js"></script>
</body>
</html>