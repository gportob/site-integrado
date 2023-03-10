<?php
/*ini_set('display_errors', 'On');
error_reporting(E_ALL);*/
require(__DIR__ . '/_config/loader.php');
require(__DIR__ . '/_config/functions.php');
?>


<?php
if (isset($_GET['curso'])) {
    $curso = $_GET['curso'];
    if ($curso == "pos-graduacao") {
        $id = 200;
    } else {
        $slug = str_replace(array("'", "\\"), "", $curso);
        $consulta = $pdo->prepare("SELECT * FROM courses WHERE `kind` > 0 AND area != 'deletado' AND `slug` = '$slug';");
        //echo "{$consulta->queryString}";
        if ($consulta->execute()) {
            $rowcount_slug = $consulta->rowCount();
            if ($rowcount_slug == 1) {
                $linha = $consulta->fetch(PDO::FETCH_ASSOC);
                $id = intval($linha['id']);
            } else {
                $curso_id = intval(str_replace(array("'", "\\"), "", $curso));
                $consulta_curso = $pdo->prepare("SELECT * FROM courses WHERE `kind` > 0 AND area != 'deletado' AND `id` = '$curso_id';");
                $consulta_curso->execute();
                $rowcount_curso = $consulta_curso->rowCount();
                if ($rowcount_curso == 1) {
                    $linha_curso = $consulta_curso->fetch(PDO::FETCH_ASSOC);

                    $id = intval($linha_curso['id']);
                } else {
                    $id = 0;
                    $code = 404;
                }
            }
        } else {
            $id = 0;
        }
    }
} else {
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
    } else {
        $id = 0;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<?php include(__DIR__ . '/includes/head.php'); ?>

<body>
<?php include(__DIR__ . '/includes/preloader.php'); ?>

<?php include(__DIR__ . '/includes/header.php'); ?>
<?php include(__DIR__ . '/includes/slide.php'); ?>

<div class="sa-section">
    <div class="section-content sa-about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-thumb">
                        <img src="<?= $config['foto-sobre'] ?>" alt="Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="section-header">
                        <div class="title">
                            <h1>SOBRE N??S</h1>
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
</div><!-- /.sa-section -->

<div class="sa-section">
    <div class="section-content feature-content section-padding jarallax section-before"
         style="background-image: url(<?= $config['pq-estudar'] ?>);">
        <div class="container">
            <div class="section-header">
                <div class="title align-self-center">
                    <h1 style="color: white">POR QUE ESTUDAR NA <?= $config['sigla'] ?>?</h1>
                    <span>Estudar na <?= $config['sigla'] ?></span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="feature">
                        <div class="icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="text">
                            <h2>Professores Capacitados</h2>
                            <p style="color: white">Os professores s??o profissionais respons??veis por transmitir
                                conhecimento. Por isso, ?? muito importante que o
                                corpo docente da institui????o seja capacitado.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature">
                        <div class="icon">
                            <i class="fa fa-building"></i>
                        </div>
                        <div class="text">
                            <h2>??tima Estrutura</h2>
                            <p style="color: white">A estrutura f??sica da faculdade n??o pode ser considerada
                                irrelevante na hora de escolher uma institui????o, ao contr??rio do
                                que se imagina, essa n??o ?? apenas uma quest??o est??tica. Por isso
                                a <?= $config['sigla'] ?> tem uma ??tima estrutura para voc?? estudar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="text">
                            <h2>Bem Localizada</h2>
                            <p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo at
                                tempora quos illum
                                voluptatum quisquam qui, architecto repellendus, a officiis adipisci.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature">
                        <div class="icon">
                            <i class="fas fa-sign-language" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h2>Acessibilidade e Inclus??o</h2>
                            <p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo at
                                tempora quos illum
                                voluptatum quisquam qui, architecto repellendus, a officiis adipisci.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature">
                        <div class="icon">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <div class="text">
                            <h2>Cursos a Dist??ncia</h2>
                            <p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo at
                                tempora quos illum
                                voluptatum quisquam qui, architecto repellendus, a officiis adipisci.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature">
                        <div class="icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <div class="text">
                            <h2>Formas de Pagamentos Flex??veis</h2>
                            <p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo at
                                tempora quos illum
                                voluptatum quisquam qui, architecto repellendus, a officiis adipisci.</p>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.section-content -->
</div><!-- /.sa-section -->

<?php include(__DIR__ . '/includes/pos.php'); ?>
<?php include(__DIR__ . '/includes/course.php'); ?>
<?php include(__DIR__ . '/includes/opiniao-alunos.php'); ?>
<?php include(__DIR__ . '/includes/noticia.php'); ?>
<?php include(__DIR__ . '/includes/redes-sociais.php'); ?>
<?php include(__DIR__ . '/includes/footer.php'); ?>


<!-- JS -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/inview.min.js"></script>
<script src="../assets/js/slick.min.js"></script>
<script src="../assets/js/jquery-ui-min.js"></script>
<script src="../assets/js/jarallax.min.js"></script>
<script src="../assets/js/counterup.min.js"></script>
<script src="../assets/js/waypoints.min.js"></script>
<script src="../assets/js/YTPlayer.min.js"></script>
<script src="../assets/js/validate.js"></script>
<script src="../assets/js/main.js"></script>

</body>
</html>