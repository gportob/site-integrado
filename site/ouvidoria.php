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

<section class="breadcrumb-section" style="background-image: url('https://i.imgur.com/e4RyZiE.png')">
    <div class="container">
        <h1>Fale Conosco</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../_lixo/index.html">Início</a></li>
            <li class="breadcrumb-item">Contato</li>
        </ol>
    </div><!-- /.container -->
</section><!-- /.breadcrumb-section -->

<div class="contact-section section-padding">
    <div class="container">
        <div class="address-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="address" style="height: 260px;">
                        <div class="icon">
                            <i class="fas fa-map-signs"></i>
                        </div>
                        <div class="text">
                            <h3>Endereço</h3>
                            <p><?= $config['endereco'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="address" style="height: 260px;">
                        <div class="icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="text">
                            <h3>Telefone</h3>
                            <p>0800 083-2656</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="address" style="height: 260px;">
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="text">
                            <h3>E-mail</h3>
                            <p><?= $config['email-contato'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="address" style="height: 260px;">
                        <div class="icon">
                            <i class="far fa-clock"></i>
                        </div>
                        <div class="text">
                            <h3>Horário de Funcionamento</h3>
                            <p>Segunda à Sexta de 9h às 22h<br>
                                Sábados de 08h às 17h</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form id="contactform" class="contact-form" action="../mail.php" method="post" enctype="text/plain"
              novalidate="novalidate">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <h5>Nome Completo</h5>
                        <input type="text" class="form-control" name="name" required="" placeholder="Nome e Sobrenome">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <h5>Eu sou:</h5>
                        <select class="form-control">
                            <option>Selecione</option>
                            <option>Aluno</option>
                            <option>Funcionário</option>
                            <option>Professor</option>
                            <option>Responsável por aluno</option>
                            <option>Outro</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <h5>E-mail</h5>
                        <input type="email" class="form-control " name="email" required=""
                               placeholder="Seu e-mail aqui">
                    </div>
                </div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <h5>Telefone</h5>
                        <input type="text" class="form-control" name="tel" required="" placeholder="(00)00000-0000">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <h5>Assunto</h5>
                        <input type="text" class="form-control " name="subject" required=""
                               placeholder="Assunto da mensagem">
                    </div>
                </div>
            </div><!-- /.row -->
            <div class="form-group">
                <h5>Mensagem</h5>
                <textarea class="form-control" name="message" required="" placeholder="Mensagem"></textarea>
            </div>
            <div class="form-group" style="text-align: end;">
                <div class="flashinfo"></div>
                <button class="btn btn-primary btn-l" name="submit" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div><!-- /.contact-section -->

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