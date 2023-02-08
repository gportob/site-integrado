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
if (isset($_GET['id']) or isset($_GET['slug'])) {
    $id = intval($_GET['id']);
    if (empty($id)) {
        $id = 0;
    }
    $slug = str_replace(array("'", "\\"), "", $_GET['slug']);

    $consulta = $pdo->query("SELECT * FROM news WHERE kind > 0 AND id = $id;");
    $totalRowsNewsById = $consulta->rowCount();
    $content_news = $consulta->fetch(PDO::FETCH_ASSOC);
    if ($totalRowsNewsById != 1) {
        $consulta = $pdo->query("SELECT * FROM news WHERE kind > 0 AND slug = '$slug';");
        $totalRowsNewsBySlug = $consulta->rowCount();
        $content_news = $consulta->fetch(PDO::FETCH_ASSOC);
        if ($totalRowsNewsBySlug != 1) {
            echo "error 404";
            die;
        } else {
            $id = intval($content_news['id']);
        }
    }

    $c_imagem = $pdo->query("SELECT * FROM imagem WHERE tipo > 0 AND news = $id AND status = 0 ORDER by capa DESC;");
    $imagens = $c_imagem->fetchAll(PDO::FETCH_ASSOC);

    if (count($imagens) > 0) {
        $capa_news = "{$config['url_site']}annexes/" . $imagens[0]['imagem'];

    } else {
        $capa_news = $content_news['img_url'];
    }


    $new_view = intval($content_news['views']) + 1;
    $sql = $pdo->query("UPDATE news SET views = $new_view WHERE id = '$id';");
    if ($sql) {

    }

    $title = "EESAP | " . $content_news['title'];
    $config['meta_description'] = strip_tags($content_news['content']);
} else {
    $id = 0;
    $method = "all";

    $title = "EESAP > Notícias";
}
?>


<section class="breadcrumb-section" style="background-image: url('https://i.imgur.com/yd6LpqP.png')">
    <div class="container">
        <h1>Notícias</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Início</a></li>
            <li class="breadcrumb-item">Notícias</li>
        </ol>
    </div><!-- /.container -->
</section><!-- /.breadcrumb-section -->

<div class="sg-page-content">
    <?php if ($method == "all"){ ?>
    <div class="sa-section">
        <div class="section-content section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <?php
                            if (isset($_GET['pag'])) {
                                $pag = intval($_GET['pag']);
                            } else {
                                $pag = 1;
                            }

                            $inicio = 0;
                            $limite = 4;

                            if ($pag != '') {
                                $inicio = ($pag - 1) * $limite;
                            }

                            $consulta = $pdo->query("SELECT * FROM news WHERE kind > 0 ORDER by dt_post DESC LIMIT $inicio,$limite;");

                            $rowcount = $consulta->rowCount();

                            $prox = $pag + 1;
                            $ant = $pag - 1;
                            $ultima_pag = ($pdo->query("SELECT * FROM news WHERE kind > 0 ORDER by dt_post DESC;")->fetchColumn() / $limite);
                            $penultima = $ultima_pag - 1;
                            $adjacentes = 2;

                            $l = 0;
                            while ($linha_news = $consulta->fetch()) {
                                $id = intval($linha_news['id']);

                                $c_imagem = $pdo->query("SELECT * FROM imagem WHERE tipo > 0 AND news = $id AND status = 0 ORDER by capa DESC;");
                                $totalImagens = $c_imagem->rowCount();
                                if ($totalImagens > 0) {
                                    $xi = 0;
                                    while ($l_imagem = $c_imagem->fetch()) {
                                        if ($xi == 0) {
                                            $linha_news['imgs'] = $l_imagem['imagem'] . ",;";
                                        } else {
                                            $linha_news['imgs'] .= $l_imagem['imagem'] . ",;";
                                        }
                                        $xi++;
                                    }
                                }

                                if ($linha_news['imgs'] != "") {
                                    $img = explode(";", $linha_news['imgs']);
                                    $x = 0;
                                    while ($x < count($img)) {
                                        $img[$x] = explode(",", $img[$x]);
                                        $content_news[$x]['img'] = $img[$x][0];
                                        $content_news[$x]['desc_img'] = $img[$x][1];
                                        $x++;
                                    }
                                    if ($totalImagens > 0) {
                                        $capa_news = "{$config['storage'] ['web']}annexes/" . $content_news[0]['img'];
                                    } elseif ($linha_news['id'] >= 9) {
                                        $capa_news = "{$config['storage'] ['web']}img/gallery/news/" . $id . "/" . $content_news[0]['img'];
                                    } else {
                                        $capa_news = "{$config['storage'] ['web']}assets/img/home1/news/" . $content_news[0]['img'];
                                    }

                                } else {
                                    $capa_news = $linha_news['img_url'];
                                }
                                ?>
                                <div class="col-lg-6">
                                    <div class="sa-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail" style="height: 300px">
                                                <a href="<?= $config['url_site'] ?>noticias/<?= $linha_news['id'] ?>"><img
                                                            src="<?= $capa_news ?>" alt="Image"
                                                            class="img-fluid"></a>
                                            </div>
                                            <div class="entry-meta">
                                                <a href="<?= $config['url_site'] ?>noticias/<?= $linha_news['id'] ?>"><?= getCompleteDate($linha_news['dt_post']) ?></a>
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <h2 class="entry-title"><a
                                                        href="<?= $config['url_site'] ?>noticias/<?= $linha_news['id'] ?>"><?= $linha_news['title'] ?></a>
                                            </h2>
                                            <p><?= substr($linha_news['content'], 0, 110); ?>... </p>
                                            <a class="read-more"
                                               href="<?= $config['url_site'] ?>noticias/<?= $linha_news['id'] ?>">Ler
                                                Mais<span
                                                        class="fa fa-arrow-right"></span></a>
                                        </div>
                                    </div><!-- /.sa-post -->
                                </div>
                                <?php
                                $l++;
                            }
                            ?>
                        </div><!-- /.row -->

                        <div class="post-pagination">
                            <ul>
                                <?php
                                #$prefix_pag = "index.php?pag=";
                                $prefix_pag = "{$config['url_site']}noticias/pag/";
                                include("includes/pagination.php"); ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="course-sidebar">
                            <div class="widget-area">
                                <a style="width: 100%" class="sa-topbar btn btn-primary" href="">Inscreva-se</a>
                                <div class="widget widget_categories">
                                    <h3 class="widget_title">Redes Sociais</h3>
                                    <ul>
                                        <li><a href="<?= $config['insta'] ?>">Instagram</a></li>
                                        <li><a href="<?= $config['face'] ?>">Facebook</a></li>
                                        <li><a href="https://api.whatsapp.com/send?phone=558000832656">Whatsapp</a></li>
                                    </ul>
                                </div><!-- /.widget -->
                                <?php include('includes/cursos-blog.php'); ?>
                            </div><!-- /.widget-area -->
                        </div><!-- /.sa-sidebar -->
                    </div>
                </div><!-- /.row -->
                <?php } else { ?>
                    <div class="sg-section">
                        <div class="section-content course-details bg-white section-padding">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="sa-course">
                                            <div class="course-info" style="height: 100%;">
                                                <div class="course-thumb">
                                                    <p class="date">
                                                        <span><i class="fa fa-calendar"></i> <?= getCompleteDate2($content_news['dt_post']) ?></span>
                                                        <!--span><i class="fa fa-eye"></i> Visualizações: <?= intval($content_news['views']) ?></span-->
                                                    </p>
                                                    <img
                                                            src="<?= $capa_news ?>" alt="Image"
                                                            class="img-fluid"></a>
                                                </div>
                                                <h2 class="title"><?= mb_strtoupper($content_news['title'], 'UTF-8') ?></h2>
                                                <p><?= $content_news['content'] ?></p>
                                            </div>
                                        </div><!-- /.sa-course -->
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="course-sidebar">
                                            <div class="widget-area">
                                                <a style="width: 100%" class="sa-topbar btn btn-primary" href="">Inscreva-se</a>
                                                <div class="widget widget_categories">
                                                    <h3 class="widget_title">Redes Sociais</h3>
                                                    <ul>
                                                        <li><a href="<?= $config['insta'] ?>">Instagram</a></li>
                                                        <li><a href="<?= $config['face'] ?>">Facebook</a></li>
                                                        <li><a href="https://api.whatsapp.com/send?phone=558000832656">Whatsapp</a>
                                                        </li>
                                                    </ul>
                                                </div><!-- /.widget -->
                                                <?php include('includes/cursos-blog.php'); ?>
                                            </div><!-- /.widget-area -->
                                        </div><!-- /.sa-sidebar -->
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </div><!-- /.section-content -->
                    </div><!-- /.sg-section -->
                <?php } ?>
            </div><!-- /.container -->
        </div><!-- /.section-content -->
    </div><!-- /.sa-section -->
</div><!-- /.sg-page-content -->

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