<?php
require(__DIR__ . '/_config/loader.php');
require(__DIR__ . '/_config/functions.php');
$pdo_educasystem = $pdo;
unset($pdo);
?>

<!DOCTYPE html>
<html lang="en">

<?php include(__DIR__ . '/includes/head.php'); ?>
<body>
<?php include(__DIR__ . '/includes/preloader.php'); ?>

<?php include(__DIR__ . '/includes/header.php'); ?>

<section class="breadcrumb-section" style="background-image: url('https://i.imgur.com/Fu4Zrsl.png')">
    <div class="container">
        <h1>Consulta Pública de Diploma</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $config['url_site'] ?>">Início</a></li>
            <li class="breadcrumb-item">Consulta Pública de Diploma</li>
        </ol>
    </div><!-- /.container -->
</section><!-- /.breadcrumb-section -->


<div class="sa-section">
    <div class="section-content sa-about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9">
                    <p>Neste site constam informações de Diplomas Registrado a partir de 25/04/2019, em atendimento a
                        Portaria nº 1.095 de 25/10/2018.</p>
                    <?php
                    if (isset($_POST['cpf']) and isset($_POST['dt_colacao'])) {
                        $cpf = onlyNumbers($cpf);
                        $cpf = mask($cpf, '###.###.###-##');
                        $dt_colacao = $_POST['dt_colacao'];
                        $consulta_diploma = $pdo_educasystem->query("SELECT a.Nome, a.Ingresso_Data, a.Conclusao_Data, diploma.dt_expedition, diploma.dt_register, diploma.n_expedition, diploma.n_register, diploma.dt_public_dou FROM registered_diplomas AS diploma JOIN Alunos AS a WHERE a.CPF = '$cpf' AND a.Colacao_Data = '$dt_colacao' AND diploma.student_id = a.id and diploma.kind > 0;");
                        if (valCpf($cpf) == True and strlen($dt_colacao) == 10 and $consulta_diploma->rowCount() == 1) {
                            $row = $consulta_diploma->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <div class="table-responsive">
                                <table class="table-striped">
                                    <thead>
                                    <th colspan="2" class="text-center">DADOS DO DIPLOMA</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th class="text-right">CPF:</th>
                                        <td>***.<?= substr($cpf, 4, 7) ?>-**</td>
                                    </tr>
                                    <tr>
                                        <th class="text-right">NOME:</th>
                                        <td><?= mb_strtoupper($row['Nome'], 'UTF-8') ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right">DATA DE INGRESSO NO CURSO:</th>
                                        <td><?= converteData($row['Ingresso_Data']) ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right">DATA DE CONCLUSÃO DE CURSO:</th>
                                        <td><?= converteData($row['Conclusao_Data']) ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right">DATA DE EXPEDIÇÃO:</th>
                                        <td><?= converteData($row['dt_expedition']) ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right">DATA DE REGISTRO:</th>
                                        <td><?= converteData($row['dt_register']) ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right">NÚMERO DE EXPEDIÇÃO:</th>
                                        <td><?= $row['n_expedition'] ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right">NÚMERO DE REGISTRO:</th>
                                        <td><?= $row['n_register'] ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right">DATA DE PUBLICAÇÃO NO DIÁRIO OFICIAL:</th>
                                        <td><?= converteData($row['dt_public_dou']) ?></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <?php
                        } else {
                            echo "<h2>Dados inválidos</h2><p><a href=''>Voltar</a></p>";
                        }
                    } else {
                        ?>
                        <form id="contactform" class="contact-form" action="../mail.php" method="post" enctype="text/plain"
                              novalidate="novalidate">
                            <hr>
                            <div class="form-group">
                                <label>CPF:</label>
                                <input type="text" class="form-control" data-mask="###.###.###-##" minlength="14"
                                       maxlength="14" name="cpf" value="" required/>
                            </div>
                            <div class="form-group">
                                <label>Data de Colação de Grau:</label>
                                <input type="date" class="form-control" name="dt_colacao" value=""/>
                            </div>
                            <div class="form-group">
                                <div class="flashinfo"></div>
                                <button class="btn btn-primary btn-l" name="submit" type="submit">Consultar</button>
                            </div>
                        </form>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
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
<script type="text/javascript" src="<?= $config['url_site'] ?>assets/plugins/jquery-mask/jquery.mask.min.js"></script>
</body>
</html>