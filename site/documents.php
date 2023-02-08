<?php
require(__DIR__ . '/_config/loader.php');
require(__DIR__ . '/_config/config.php');
require(__DIR__ . '/_config/db_connect.php');
require(__DIR__ . '/_config/functions.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php include(__DIR__ . '/includes/head.php'); ?>
<body>
<?php include(__DIR__ . '/includes/preloader.php'); ?>

<?php include(__DIR__ . '/includes/header.php'); ?>

<section class="breadcrumb-section" style="background-image: url('https://i.imgur.com/sfqFdXz.png')">
    <div class="container">
        <h1>Documentos Institucionais</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $config['url_site'] ?>">Início</a></li>
            <li class="breadcrumb-item">Documentos Institucionais</li>
        </ol>
    </div><!-- /.container -->
</section><!-- /.breadcrumb-section -->

<div class="sa-section">
    <div class="section-content sa-about section-padding">
        <div class="container">
            <div class="row">
                <?php
                if ($config['ies'] == 'ftm') {
                    $url = 'http://api.educasystem.com.br/consultDb/';
                    $curl = curl_init();
                    curl_setopt($curl, CURLOPT_URL, $url);
                    curl_setopt($curl, CURLOPT_POSTFIELDS, array('token' => md5(date('Y-m-d') . 'token233'), 'ies' => 'ftm', 'action' => 'consultDocumentsCourse'));
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                    $retorno = curl_exec($curl);
                    curl_close($curl);

                    $dataRetorno = json_decode($retorno);
                    if ($dataRetorno) {
                        if ($dataRetorno->status == 200) {
                            foreach ($dataRetorno->results as $result) {
                                if ($result->annexe > 0) {
                                    $urlFile = 'https://funepi.educasystem.com.br' . $result->filename;
                                    ?>
                                    <span style="margin-left: 1cm;"><?= $result->title ?>: <a style=" color: #0a58ca;"
                                                                                              href="<?= $urlFile ?>"
                                                                                              target="_blank">Clique para visualizar</a></span>
                                    <br/>
                                    <?php
                                }
                            }
                        }
                    }
                    ?>
                <?php } else {
                    unset($pdo);
                    $forceDb = 'eesap';
                    include('/var/www/html/educasystem/function/db_connect.php');
                    include('/var/www/html/educasystem/includes/classes/Annexe.php');

                    $consult_documents = $pdo->query("SELECT * FROM documents WHERE kind = 3 and `for` = 3 ORDER by dt_document DESC, title ASC, id DESC;");

                    while ($rowDocument = $consult_documents->fetch()) {
                        $openFile = ' - ';
                        if ($rowDocument['annexe'] > 0) {
                            $annexe = new Annexe($pdo, $rowDocument['annexe']);
                        }
                        ?>
                        <li><a href="<?= $annexe->getUrlFile('http://eesap.educasystem.com.br') ?>"
                               target="_blank"><?= $rowDocument['title'] ?></a></li>
                    <?php }
                    ?>
                <?php }
                ?>
            </div>
        </div><!-- /.container -->
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