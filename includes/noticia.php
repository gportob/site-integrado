<div class="sa-section">
    <div class="section-content section-padding">
        <div class="container">
            <div class="section-header d-flex justify-content-between">
                <div class="title align-self-center">
                    <h1>ÚLTIMAS NOTÍCIAS</h1>
                    <span>NOTÍCIAS</span>
                </div>
                <div class="view-all align-self-center">
                    <a href="<?= $config['url_site'] ?>noticias" class="btn btn-primary">Ver tudo</a>
                </div>
            </div>
            <div class="row">
                <?php
                if (isset($_GET['pag'])) {
                    $pag = intval($_GET['pag']);
                } else {
                    $pag = 1;
                }

                $inicio = 0;
                $limite = 3;

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
                    <div class="col-md-6 col-lg-4">
                        <div class="sa-post">
                            <div class="entry-header">
                                <div class="entry-thumbnail" style="height: 300px;">
                                    <a href="<?= $config['url_site'] ?>noticias/<?= $linha_news['id'] ?>"><img src="<?= $capa_news ?>" alt="Image"
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
                                <a class="read-more" href="<?= $config['url_site'] ?>noticias/<?= $linha_news['id'] ?>">Ler Mais<span
                                            class="fa fa-arrow-right"></span></a>
                            </div>
                        </div><!-- /.sa-post -->
                    </div>
                    <?php
                    $l++;
                }
                ?>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.section-content -->
</div><!-- /.sa-section -->