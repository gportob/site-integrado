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

<section class="breadcrumb-section" style="background-image: url('https://i.imgur.com/kpfN9vW.png')">
    <div class="container">
        <h1>Formas de Ingresso</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Início</a></li>
            <li class="breadcrumb-item">Formas de Ingresso</li>
        </ol>
    </div><!-- /.container -->
</section><!-- /.breadcrumb-section -->

<div class="sa-section">
    <div class="section-content sa-about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-thumb">
                        <p>É possível ingressar nos cursos de graduação por meio de diferentes processos, o Vestibular
                            Tradicional, Vestibular Agendado, ENEM, Transferências de outras IES, e Portadores de
                            Diploma de Graduação. </p>
                        <p>Já para os cursos de pós-graduação, o aluno basta comprovar a sua formação na área para
                            efetuar a matrícula. </p>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-info">
                        <h5>Segue abaixo a lista de documentação para cada forma de ingresso:</h5>
                        <select class="form-control" id="select" name="select" required>
                            <option value="">Selecionar a forma de ingresso</option>
                            <option value="vest">Vestibular Tradicional, Agendado ou ENEM</option>
                            <option value="transf">Transferências de Outras Instituições</option>
                            <option value="grad">Graduado</option>
                            <option value="pos-grad">Pós-Graduação</option>
                        </select>

                        <div class="vest box">
                            <div class="formas_ingresso">
                                <p>1. Diploma/Certificado do Ensino Médio (original e cópia autenticada).</p>
                                <p>2. Histórico Escolar do Ensino Médio (original e cópia autenticada).</p>
                                <p>3. Carteira de Identidade – RG (original e cópia autenticada).</p>
                                <p>4. Cadastro de Pessoa Física – CPF (original e cópia autenticada).</p>
                                <p>5. Certidão de Nascimento ou Casamento (original e cópia autenticada).</p>
                                <p>6. Comprovante de residência (original e cópia autenticada).</p>
                                <p>7. Título de eleitor (original e cópia autenticada).</p>
                                <p>8. Comprovante de quitação com o Serviço Militar – Reservista – Apenas para
                                    candidatos do sexo
                                    masculino
                                    (original e cópia autenticada).</p>
                                <p>9. Candidatos menores devem estar com o representante legal e este deverá apresentar
                                    RG e CPF
                                    (original e
                                    cópia autenticada).</p>
                            </div>
                        </div>
                        <div class="transf box">
                            <div class="formas_ingresso">
                                <p>1. Declaração de matrícula (original).</p>
                                <p>2. Histórico parcial (original).</p>
                                <p>3. Conteúdo programático – Ementa.</p>
                                <p>4. Diploma/Certificado do Ensino Médio (original e cópia autenticada).</p>
                                <p>5. Histórico Escolar do Ensino Médio (original e cópia autenticada).</p>
                                <p>6. Carteira de Identidade – RG (original e cópia autenticada).</p>
                                <p>7. Cadastro de Pessoa Física – CPF (original e cópia autenticada).</p>
                                <p>8. Certidão de Nascimento ou Casamento (original e cópia autenticada).</p>
                                <p>9. Comprovante de residência (original e cópia autenticada).</p>
                                <p>10. Título de eleitor (original e cópia autenticada).</p>
                                <p>11. Comprovante de quitação com o Serviço Militar – Reservista – Apenas para
                                    candidatos do sexo
                                    masculino
                                    (original e cópia autenticada).</p>
                                <p>12. Candidatos menores devem estar com o representante legal e este deverá apresentar
                                    RG e CPF
                                    (original
                                    e cópia autenticada).</p>
                            </div>
                        </div>
                        <div class="grad box">
                            <div class="formas_ingresso">
                                <p>1. Diploma de Graduação (original e cópia).</p>
                                <p>2. Histórico Escolar do Curso (original e cópia).</p>
                                <p>3. Diploma/Certificado do Ensino Médio (original e cópia autenticada).</p>
                                <p>4. Histórico Escolar do Ensino Médio (original e cópia autenticada).</p>
                                <p>5. Carteira de Identidade – RG (original e cópia autenticada).</p>
                                <p>6. Cadastro de Pessoa Física – CPF (original e cópia autenticada).</p>
                                <p>7. Certidão de Nascimento ou Casamento (original e cópia autenticada).</p>
                                <p>8. Comprovante de residência (original e cópia autenticada).</p>
                                <p>9. Título de eleitor (original e cópia autenticada).</p>
                                <p>10. Comprovante de quitação com o Serviço Militar – Reservista – Apenas para
                                    candidatos do sexo
                                    masculino
                                    (original e cópia autenticada).</p>
                                <p>11. Candidatos menores devem estar com o representante legal e este deverá apresentar
                                    RG e CPF
                                    (original
                                    e cópia autenticada).</p>

                            </div>
                        </div>
                        <div class="pos-grad box">
                            <div class="formas_ingresso">
                                <p>1. Diploma de Graduação (original e cópia).</p>
                                <p>2. Histórico Escolar do Ensino Médio (original e cópia autenticada).</p>
                                <p>3. Carteira de Identidade – RG (original e cópia autenticada).</p>
                                <p>4. Cadastro de Pessoa Física – CPF (original e cópia autenticada).</p>
                                <p>5. Certidão de Nascimento ou Casamento (original e cópia autenticada).</p>
                                <p>6. Comprovante de residência (original e cópia autenticada).</p>
                                <p>7. Título de eleitor (original e cópia autenticada).</p>
                                <p>8. Comprovante de quitação com o Serviço Militar – Reservista – Apenas para
                                    candidatos do sexo
                                    masculino
                                    (original e cópia autenticada).</p>
                                <p>9. Candidatos menores devem estar com o representante legal e este deverá apresentar
                                    RG e CPF
                                    (original e
                                    cópia autenticada).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- /.section-content -->
</div><!-- /.sa-section -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    // jQuery functions to hide and show the div
    $(document).ready(function () {
        $("select").change(function () {
            $(this).find("option:selected")
                .each(function () {
                    var optionValue = $(this).attr("value");
                    if (optionValue) {
                        $(".box").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else {
                        $(".box").hide();
                    }
                });
        }).change();
    });
</script>

<?php include(__DIR__ . '/includes/opiniao-alunos.php'); ?>
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