<div class="sa-section">
    <?php if ($id == 0) {
    $idGalleryIcon = $pdo->query("SELECT id FROM gallery WHERE name = 'icon-course' LIMIT 0,1")->fetchColumn();

    $consulta = $pdo->prepare("SELECT * FROM courses WHERE kind > 0 AND `level` = 1 ORDER by id DESC;");
    $consulta->execute();
    $consulta2 = $pdo->prepare("SELECT * FROM courses WHERE kind > 0 AND `level` = 2;");
    $consulta2->execute();
    ?>
    <div class="section-content section-padding padding-bottom-0">
        <div class="container">
            <div class="section-header justify-content-between">
                <div class="title align-self-center">
                    <h1>Graduação Presencial</h1>
                    <span>Presencial</span>
                </div>
                <div class="view-all align-self-center">
                    <a href="<?= $config['url_site'] ?>cursos" class="btn btn-primary">Ver Tudo</a>
                </div>
            </div><!-- /.section-header -->

            <div class="sa-course-content">

                <div class="sa-course-slider">
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
                            <div class="sa-course">
                                <span class="badges"><?= getReais($linha['price']) ?></span>
                                <div class="course-thumb">
                                    <a href="<?= $config['url_site'] ?>curso/<?= $linha['id'] ?>"><img src="<?= $imgCourse ?>" alt="Image" class="img-fluid">
                                        <div class="overlay">

                                        </div>
                                    </a>
                                    <div class="rating-date align-self-end">
                                        <ul class="global-list d-flex star-rating align-self-center">
                                            <li class="checked"><i class="fas fa-star"></i></li>
                                            <li class="checked"><i class="fas fa-star"></i></li>
                                            <li class="checked"><i class="fas fa-star"></i></li>
                                            <li class="checked"><i class="fas fa-star"></i></li>
                                            <li class="checked"><i class="fas fa-star"></i></li>
                                        </ul>
                                        <div class="date">
                                     <span><img style="width: 15%;"
                                                src=""><?= $linha['turno_info'] ?></span>
                                        </div>
                                    </div><!-- /.rating-price -->
                                </div><!-- /.course-thumb -->

                                <div class="course-info" style="height:120px;">
                                    <div class="info">
                                        <h2 class="title"><a href="<?= $config['url_site'] ?>curso/<?= $linha['id'] ?>"><?= $linha['name'] ?></a>
                                        </h2>
                                    </div>
                                    <div class="sa-meta">
                                        <ul class="global-list">
                                            <li><span><i class="far fa-clock"></i></span><?= $linha['duration_info'] ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- /.course-info -->
                            </div><!-- /.sg-course -->
                        <?php } ?>
                    <?php } ?>
                    <?php } ?>
                </div><!-- /.sg-course-slider -->
            </div><!-- /sg-course-content -->
        </div><!-- /.container -->
    </div><!-- /.section-content -->
</div><!-- /.sa-section -->
<div class="sa-section">
    <?php if ($id == 0) {
    $idGalleryIcon = $pdo->query("SELECT id FROM gallery WHERE name = 'icon-course' LIMIT 0,1")->fetchColumn();

    $consulta = $pdo->prepare("SELECT * FROM courses WHERE kind > 0 AND `level` = 1 ORDER by id DESC;");
    $consulta->execute();
    $consulta2 = $pdo->prepare("SELECT * FROM courses WHERE kind > 0 AND `level` = 2;");
    $consulta2->execute();
    ?>
    <div class="section-content section-padding padding-bottom-0">
        <div class="container">
            <div class="section-header justify-content-between">
                <div class="title align-self-center">
                    <h1>Graduação EAD e Semipresencial</h1>
                    <span>EAD e Semipresencial</span>
                </div>
                <div class="view-all align-self-center">
                    <a href="<?= $config['url_site'] ?>cursos-ead" class="btn btn-primary">Ver Tudo</a>
                </div>
            </div><!-- /.section-header -->

            <div class="sa-course-content">
                <div class="sa-course-slider">
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
                        <?php if ($linha['modality'] == 2) { ?>
                            <div class="sa-course">
                                <span class="badges"><?= getReais($linha['price']) ?></span>
                                <div class="course-thumb">
                                    <a href="<?= $config['url_site'] ?>curso/<?= $linha['id'] ?>"><img src="<?= $imgCourse ?>" alt="Image" class="img-fluid">
                                        <div class="overlay">

                                        </div>
                                    </a>
                                    <div class="rating-date align-self-end">
                                        <ul class="global-list d-flex star-rating align-self-center">
                                            <li class="checked"><i class="fas fa-star"></i></li>
                                            <li class="checked"><i class="fas fa-star"></i></li>
                                            <li class="checked"><i class="fas fa-star"></i></li>
                                            <li class="checked"><i class="fas fa-star"></i></li>
                                            <li class="checked"><i class="fas fa-star"></i></li>
                                        </ul>
                                        <div class="date">
                                     <span><img style="width: 15%;"
                                                src=""><?= $linha['turno_info'] ?></span>
                                        </div>
                                    </div><!-- /.rating-price -->
                                </div><!-- /.course-thumb -->

                                <div class="course-info" style="height:120px;">
                                    <div class="info">
                                        <h2 class="title"><a href="<?= $config['url_site'] ?>curso/<?= $linha['id'] ?>"><?= $linha['name'] ?></a>
                                        </h2>
                                    </div>
                                    <div class="sa-meta">
                                        <ul class="global-list">
                                            <li><span><i class="far fa-clock"></i></span><?= $linha['duration_info'] ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- /.course-info -->
                            </div><!-- /.sg-course -->
                        <?php } ?>
                    <?php } ?>
                    <?php } ?>
                </div><!-- /.sg-course-slider -->
            </div><!-- /sg-course-content -->
        </div><!-- /.container -->
    </div><!-- /.section-content -->
</div><!-- /.sa-section -->