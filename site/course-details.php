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

if ($id != 0) {
    unset($consulta);
    unset($linha);
    $consulta = $pdo->prepare("SELECT * FROM courses WHERE `id` = '$id';");
    $consulta->execute();
    $rowcount = $consulta->rowCount();
    $linha = $consulta->fetch(PDO::FETCH_ASSOC);

    $slug = $linha['slug'];
    $banner = $linha['banner'];
    $nome_curso = $linha['name'];
    if ($id == 200) {
        $nome_curso = "Pós-Graduação EESAP";
    }

    if ($linha['level'] == 1) {
        $level = 1;
        $name_level = "Graduação";
    } elseif ($linha['level'] == 2) {
        $level = 2;
        $name_level = "Pós-Graduação";
        $area = $linha['area'];
    } else {
        echo "error, level.";
        die;
    }
}
?>

<section class="breadcrumb-section">
    <div class="container">
        <h1><?= $nome_curso ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $config['url_site'] ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= $config['url_site'] ?>cursos">Cursos</a></li>
            <li class="breadcrumb-item"><a
                        href="<?= $config['url_site'] ?>curso/<?= $linha['id'] ?>"><?= $nome_curso ?></a></li>
        </ol>
    </div><!-- /.container -->
</section><!-- /.breadcrumb-section -->
<?php
$consulta = $pdo->prepare("SELECT * FROM courses WHERE `id` = '$id';");
$consulta->execute();
?>
<div class="sg-section">
    <div class="section-content course-details bg-white section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="sa-course">
                        <div class="course-info" style="height: initial">
                            <p><?= $linha['html_info'] ?></p>
                            <?php include('includes/depoimentos-alunos.php'); ?>
                        </div>
                    </div><!-- /.sa-course -->
                </div>
                <div class="col-lg-4">
                    <div class="course-sidebar">
                        <div class="widget-area">
                            <a style="width: 100%" class="sa-topbar btn btn-primary" href="<?= $config['ingresso'] ?>">Inscreva-se</a>
                            <div class="widget widget_categories">
                                <h3 class="widget_title">Informações Básicas</h3>
                                <ul>
                                    <li style="text-align: initial;"><?= $linha['duration_info'] ?></li>
                                    <li style="text-align: initial;"><?= $linha['aulas_info'] ?></li>
                                    <li style="text-align: initial;"><?= $linha['turno_info'] ?></li>
                                    <strong>
                                        <div id="contentInvestimentoCurso" style="display: none;">
                                            - <?= $linha['price_info'] ?></div>
                                        <a class="fale-conosco elementos" id="btnVerInvestimento"
                                           href="javascript:openFormLead_verInvestimento();">VER
                                            INVESTIMENTO</a></strong>
                                </ul>
                            </div><!-- /.widget -->
                            <script>
                                function openFormLead_verInvestimento() {
                                    $('#modalInvestimento').modal('show');
                                }

                                function enviarLead_verInvestimento() {
                                    if ($('#input_telefone').val() != '') {
                                        $('#modalInvestimento').modal('hide');
                                        $('#contentInvestimentoCurso').css('display', 'block');
                                        $('#btnVerInvestimento').css('display', 'none');

                                        $.ajax({
                                            url: '<?=$config['url_site']?>api/cad_user.php',
                                            type: 'POST',
                                            dataType: 'JSON',
                                            data: $('#formModalRef').serialize(),
                                            success: function (data) {

                                            }
                                        });
                                    }
                                }
                            </script>
                            <div class="widget widget_categories">
                                <h3 class="widget_title">Redes Sociais</h3>
                                <ul>
                                    <li><a href="<?= $config['insta'] ?>">Instagram</a></li>
                                    <li><a href="<?= $config['face'] ?>">Facebook</a></li>
                                    <li><a href="https://api.whatsapp.com/send?phone=558000832656">Whatsapp</a></li>
                                </ul>
                            </div><!-- /.widget -->
                            <div class="widget widget_recent_entries">
                                <h3 class="widget_title">Notícias</h3>
                                <?php
                                $consulta_news = $pdo->query("SELECT * FROM news WHERE kind > 0 ORDER by dt_post DESC LIMIT 5;");
                                $consulta_news->execute();
                                while ($linha_news = $consulta_news->fetch()) {
                                    ?>
                                    <ul>
                                        <li class="media">
                                            <div class="media-body">
                                                <a href="<?= $config['url_site'] ?>noticias/<?= $linha_news['id'] ?>"><strong><?= $linha_news['title'] ?></strong></a>
                                                <span style="font-size: 14px;"
                                                      class="b-date"><?= date('d', strtotime($linha_news['dt_post'])) ?> de <?= getMonthName(date('m', strtotime($linha_news['dt_post']))) ?></span>
                                            </div>
                                        </li>
                                    </ul>
                                <?php } ?>
                                <div style="margin-top: 30px; text-align: end;">
                                    <a style="color: var(--primary-color);" class="read-more"
                                       href="<?= $config['url_site'] ?>noticias">Ver Mais</a>
                                </div>
                            </div><!-- /.widget -->
                        </div><!-- /.widget-area -->
                    </div><!-- /.sa-sidebar -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.section-content -->
</div><!-- /.sg-section -->
<div class="modal fade" id="modalInvestimento" tabindex="-1" role="dialog" aria-labelledby="modalInvestimentoLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button style="background-color: white;border-radius: 3px;border: 1px solid var(--primary-color);margin: 10px; color: var(--primary-color);" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                <h4 class="modal-title">Ver Investimento do Curso de <?= @$nome_curso ?></h4>
            </div>
            <div class="modal-body">
                <div class="col-md-12" style="padding-top: 20px;">
                    <form id="formModalRef" action="" method="post">
                        <input type="hidden" name="CadUser" value="True">

                        <input type="hidden" name="ref"
                               value="Ver Investimento do Curso de <?= @$nome_curso ?>, na EESAP">
                        <div class="form-group">
                            <label for="input_name"><strong>Nome completo:</strong></label>
                            <input id="input_name" type="text" class="form-control" name="name"
                                   placeholder="Nome completo" required="">
                        </div>
                        <div class="row">
                            <div class="col-md-7 col-xs-12">
                                <div class="form-group">
                                    <label for="input_email"><strong>E-mail:</strong></label>
                                    <input id="input_email" type="email" class="form-control" name="mail"
                                           placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-md-5 col-xs-12">
                                <div class="form-group">
                                    <label for="input_telefone"><strong>Telefone:</strong></label>
                                    <input id="input_telefone" type="text" class="form-control" name="phone"
                                           placeholder="Telefone" required="" maxlength="16">
                                </div>
                            </div>
                        </div>
                        <!--div class="form-group">
                            <label for="input_modalidade"><strong>Modalidade:</strong></label>
                            <select class="custom-select" id="input_modalidade" name="modalidade">
                                <option selected>Escolher</option>
                                <option value="1">Presencial</option>
                                <option value="2">Ensino à Distância</option>
                            </select>
                        </div-->

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="sa-topbar btn btn-primary" style="margin-top: 20px;"
                        onclick="enviarLead_verInvestimento();">Próximo
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
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
</html>