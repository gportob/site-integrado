<?php
require(__DIR__ . '/_config/loader.php');
require(__DIR__ . '/_config/functions.php');
?>

<!DOCTYPE html>
<html lang="en">

<style>
    .content {
        display: none;
        overflow: hidden;
    }
    @media(max-width: 980px) {
        .collapsible {
            width: 100%;
        }
    }
</style>

<?php include(__DIR__ . '/includes/head.php'); ?>
<body>
<?php include(__DIR__ . '/includes/preloader.php'); ?>

<?php include(__DIR__ . '/includes/header.php'); ?>

<section class="breadcrumb-section" style="background-image: url('https://i.imgur.com/bMDWWR3.png')">
    <div class="container">
        <h1>Estrutura</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $config['url_site'] ?>">Início</a></li>
            <li class="breadcrumb-item">Estrutura</li>
        </ol>
    </div><!-- /.container -->
</section><!-- /.breadcrumb-section -->

<div class="container btn-structure ">
    <?php
    $consulta_gallery = $pdo->prepare("SELECT * FROM gallery WHERE kind > 0 AND name = 'estrutura' ORDER by title ASC;");
    $consulta_gallery->execute();
    $rowcount_gallery = $consulta_gallery->rowCount();

    while ($linha_gallery = $consulta_gallery->fetch()) { ?>
        <button type="button"
                class="collapsible col-md-8 sa-topbar btn btn-primary"><?= $linha_gallery['title'] ?></button>
        <div class="content img-structure container">
            <?php
            $gallery = intval($linha_gallery['id']);
            $consulta = $pdo->prepare("SELECT * FROM imagem WHERE status = 0 AND gallery = $gallery;");
            $consulta->execute();
            $rowcount = $consulta->rowCount();

            $x = 0;
            while ($linha_img = $consulta->fetch()) {
                ?>
                <img style="margin: 8px 0px;" src="<?= $config['storage']['web'] ?>annexes/<?= $linha_img['imagem'] ?>">
            <?php } ?>
        </div>
    <?php } ?>
</div>

<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
            this.classList.toggle("inative");
            var content = this.nextElementSibling;
            if (content.style.display === "none") {
                content.style.display = "block";
            } else {
                content.style.display = "none";
            }
        });
    }
</script>
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