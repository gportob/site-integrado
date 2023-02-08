<?php
require(__DIR__ . '/_config/loader.php');
require(__DIR__ . '/_config/functions.php');
?>

<!DOCTYPE html>
<html lang="en">

<style>
    @media (max-width: 770px) {
        img {
            display: none;
        }
    }
</style>

<?php include(__DIR__ . '/includes/head.php'); ?>
<body>
<?php include(__DIR__ . '/includes/preloader.php'); ?>

<?php include(__DIR__ . '/includes/header.php'); ?>

<?php $acessing = "";
if (isset($_GET['acessando'])) {
    $acessing = $_GET['acessando'];
}
if ($acessing == "") { ?>

    <?php include('includes/capa-periodicos.php'); ?>

    <div class="shopping-cart section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10" style="margin: 0 auto">
                    <div>
                        <p>
                            A Escola de Ensino Superior do Agreste Paraibano oferece aos seus alunos acesso a um
                            conjunto de
                            periódicos
                            eletrônicos, os quais são referências nacionais e internacionais em sua respectiva área de
                            atuação.
                            Dessa forma,
                            a instituição contribui para a qualidade da formação de seu corpo docente e discente por
                            meio da
                            disponibilização de informações atualizadas na área dos seus cursos de graduação. Todos os
                            periódicos
                            listados
                            para consulta possuem avaliação positiva no Qualis CAPES.
                        </p>
                    </div>
                    <form class="woocommerce-cart-form" action="#">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th>
                                    <div class="product">
                                                    <span class="product-thumb">
                                                        <img style="max-width: 10%;"
                                                             src="https://i.imgur.com/dp0lTdo.png"
                                                             alt="Image" class="img-fluid">
                                                    </span>
                                        <span>Administração</span>
                                    </div><!-- /.product -->
                                </th>
                                <td><a href="<?= $config['url_site'] ?>periodicos/adm/" class="btn btn-primary">Clique
                                        Aqui</a></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th>
                                    <div class="product">
                                                    <span class="product-thumb">
                                                        <img style="max-width: 10%;"
                                                             src="https://i.imgur.com/keFMfBg.png"
                                                             alt="Image" class="img-fluid">
                                                    </span>
                                        <span>Educação Física</span>
                                    </div><!-- /.product -->
                                </th>
                                <td><a href="<?= $config['url_site'] ?>periodicos/educacao-fisica/"
                                       class="btn btn-primary">Clique Aqui</a></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th>
                                    <div class="product">
                                                    <span class="product-thumb">
                                                        <img style="max-width: 10%;"
                                                             src="https://i.imgur.com/6IwOJYC.png"
                                                             alt="Image" class="img-fluid">
                                                    </span>
                                        <span>Psicologia</span>
                                    </div><!-- /.product -->
                                </th>
                                <td><a href="<?= $config['url_site'] ?>periodicos/psicologia/" class="btn btn-primary">Clique
                                        Aqui</a></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th>
                                    <div class="product">
                                                    <span class="product-thumb">
                                                        <img style="max-width: 10%;"
                                                             src="https://i.imgur.com/eYXTUrX.png"
                                                             alt="Image" class="img-fluid">
                                                    </span>
                                        <span>Ciências Contábeis</span>
                                    </div><!-- /.product -->
                                </th>
                                <td><a href="<?= $config['url_site'] ?>periodicos/ciencias-contabeis/"
                                       class="btn btn-primary">Clique Aqui</a></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th>
                                    <div class="product">
                                                    <span class="product-thumb">
                                                        <img style="max-width: 10%;"
                                                             src="https://i.imgur.com/0CzMLOS.png"
                                                             alt="Image" class="img-fluid">
                                                    </span>
                                        <span>Farmácia</span>
                                    </div><!-- /.product -->
                                </th>
                                <td><a href="<?= $config['url_site'] ?>periodicos/farmacia/" class="btn btn-primary">Clique
                                        Aqui</a></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th>
                                    <div class="product">
                                                    <span class="product-thumb">
                                                        <img style="max-width: 10%;"
                                                             src="https://i.imgur.com/66TxhIW.png"
                                                             alt="Image" class="img-fluid">
                                                    </span>
                                        <span>Nutrição</span>
                                    </div><!-- /.product -->
                                </th>
                                <td><a href="<?= $config['url_site'] ?>periodicos/nutricao/" class="btn btn-primary">Clique
                                        Aqui</a></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th>
                                    <div class="product">
                                                    <span class="product-thumb">
                                                        <img style="max-width: 10%;"
                                                             src="https://i.imgur.com/xYSR97e.png"
                                                             alt="Image" class="img-fluid">
                                                    </span>
                                        <span>Engenharia Civil</span>
                                    </div><!-- /.product -->
                                </th>
                                <td><a href="<?= $config['url_site'] ?>periodicos/engenharia-civil/"
                                       class="btn btn-primary">Clique Aqui</a></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th>
                                    <div class="product">
                                                    <span class="product-thumb">
                                                        <img style="max-width: 10%;"
                                                             src="https://i.imgur.com/TnYvxsW.png"
                                                             alt="Image" class="img-fluid">
                                                    </span>
                                        <span>Direito</span>
                                    </div><!-- /.product -->
                                </th>
                                <td><a href="<?= $config['url_site'] ?>periodicos/direito/" class="btn btn-primary">Clique
                                        Aqui</a></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th>
                                    <div class="product">
                                                    <span class="product-thumb">
                                                        <img style="max-width: 10%;"
                                                             src="https://i.imgur.com/loNjNxx.png"
                                                             alt="Image" class="img-fluid">
                                                    </span>
                                        <span>Odontologia</span>
                                    </div><!-- /.product -->
                                </th>
                                <td><a href="<?= $config['url_site'] ?>periodicos/odontologia/" class="btn btn-primary">Clique
                                        Aqui</a></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th>
                                    <div class="product">
                                                    <span class="product-thumb">
                                                        <img style="max-width: 10%;"
                                                             src="https://i.imgur.com/zk99eGu.png"
                                                             alt="Image" class="img-fluid">
                                                    </span>
                                        <span>Fisioterapia</span>
                                    </div><!-- /.product -->
                                </th>
                                <td><a href="<?= $config['url_site'] ?>periodicos/fisioterapia/"
                                       class="btn btn-primary">Clique Aqui</a></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th>
                                    <div class="product">
                                                    <span class="product-thumb">
                                                        <img style="max-width: 10%;"
                                                             src="https://i.imgur.com/T8AwFrc.png"
                                                             alt="Image" class="img-fluid">
                                                    </span>
                                        <span>Sistemas para Internet</span>
                                    </div><!-- /.product -->
                                </th>
                                <td><a href="<?= $config['url_site'] ?>periodicos/sistemas-para-internet/"
                                       class="btn btn-primary">Clique Aqui</a></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th>
                                    <div class="product">
                                                    <span class="product-thumb">
                                                        <img style="max-width: 10%;"
                                                             src="https://i.imgur.com/ga8H2Ga.png"
                                                             alt="Image" class="img-fluid">
                                                    </span>
                                        <span>Análise e Desenvolvimento de Sistemas</span>
                                    </div><!-- /.product -->
                                </th>
                                <td>
                                    <a href="<?= $config['url_site'] ?>periodicos/analise-e-desenvolvimento-de-sistemas/"
                                       class="btn btn-primary">Clique Aqui</a></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th>
                                    <div class="product">
                                                    <span class="product-thumb">
                                                        <img style="max-width: 10%;"
                                                             src="https://i.imgur.com/fRK1sbh.png"
                                                             alt="Image" class="img-fluid">
                                                    </span>
                                        <span>Serviço Social</span>
                                    </div><!-- /.product -->
                                </th>
                                <td><a href="<?= $config['url_site'] ?>periodicos/servico-social/"
                                       class="btn btn-primary">Clique Aqui</a></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th>
                                    <div class="product">
                                                    <span class="product-thumb">
                                                        <img style="max-width: 10%;"
                                                             src="https://i.imgur.com/UYc5gz2.png"
                                                             alt="Image" class="img-fluid">
                                                    </span>
                                        <span>Pedagogia</span>
                                    </div><!-- /.product -->
                                </th>
                                <td><a href="<?= $config['url_site'] ?>periodicos/pedagogia/" class="btn btn-primary">Clique
                                        Aqui</a></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th>
                                    <div class="product">
                                                    <span class="product-thumb">
                                                        <img style="max-width: 10%;"
                                                             src="https://i.imgur.com/UVV0ALM.png"
                                                             alt="Image" class="img-fluid">
                                                    </span>
                                        <span>Enfermagem</span>
                                    </div><!-- /.product -->
                                </th>
                                <td><a href="<?= $config['url_site'] ?>periodicos/enfermagem/" class="btn btn-primary">Clique
                                        Aqui</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div><!-- /.row -->
        </div>
    </div><!-- /.cart-section -->

<?php } else {
    $extentionFile = 'html';
    if ($acessing == 'pedagogia') {
        $extentionFile = 'php';
    }
    if ($acessing == 'odontologia') {
        $extentionFile = 'php';
    }
    if ($acessing == 'fisioterapia') {
        $extentionFile = 'php';
    }
    if ($acessing == 'sistemas-para-internet') {
        $extentionFile = 'php';
    }

    if ($acessing == 'analise-e-desenvolvimento-de-sistemas') {
        $extentionFile = 'php';
    }

    if ($acessing == 'enfermagem') {
        $extentionFile = 'php';
    }

    if ($acessing == 'adm') {
        $extentionFile = 'php';
    }

    if ($acessing == 'engenharia-civil') {
        $extentionFile = 'php';
    }

    if ($acessing == 'farmacia') {
        $extentionFile = 'php';
    }

    if ($acessing == 'direito') {
        $extentionFile = 'php';
    }

    if ($acessing == 'educacao-fisica') {
        $extentionFile = 'php';
    }

    if ($acessing == 'psicologia') {
        $extentionFile = 'php';
    }
    echo "<div class=\"faq_area\">
            <div class=\"row\">
                <div class=\"col-md-12\">";
    include("periodicos/{$acessing}.{$extentionFile}");
    echo "</div>
        </div>
    </div>";
} ?>


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
<script src="<?= $config['url_site'] ?>assets/js/jquery.spinner.min.js"></script>
<script src="<?= $config['url_site'] ?>assets/js/main.js"></script>
</body>
</html>