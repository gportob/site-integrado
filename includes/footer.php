<style>
    .instagram:hover {
        background: rgb(253,192,91);
        background: linear-gradient(34deg, rgba(253,192,91,1) 0%, rgba(90,83,201,1) 35%, rgba(219,45,124,1) 100%);
        border-color: #5a5a5a;
    }
    .youtube:hover {
        background: #C9070D;
    }
    .emec {
        width: 68%;
    }
    @media(max-width: 800px) {
        .emec {
            width: 40%;
        }
        .e-mec {
            text-align: center;
        }
    }
</style>

<div class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <div class="col-md-4 col-lg-3">
                        <div class="footer-widget e-mec">
                            <img class="emec" src="<?= $config['emec'] ?>">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" style="padding-right: 40px;">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="#"><img src="<?= $config['logo2'] ?>" alt="Logo" class="img-fluid"></a>
                            </div>
                            <p>Inscrições abertas para o vestibular dos cursos presenciais da <?= $config['sigla'] ?>,
                                entre em contato
                                conosco e garanta descontos especiais!</p>
                            <div class="footer-social">
                                <ul class="global-list">
                                    <li><a href="<?= $config['face'] ?>"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://api.whatsapp.com/send?phone=558000832656"><i
                                                    class="fab fa-whatsapp"></i></a></li>
                                    <li><a class="instagram" href="<?= $config['insta'] ?>"><i class="fab fa-instagram"></i></a></li>
                                    <?php
                                    if($config['ies'] == 'ftm') {
                                       echo "<li><a class='youtube' href=https://www.youtube.com/channel/UCklX68CjFcvL4xqBUSej5rw><i class='fab fa-youtube'></i></a></li>";
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget px-md-4">
                            <h3>Conheça a <?= $config['sigla'] ?></h3>
                            <ul class="global-list">
                                <li><a href="<?= $config['url_site'] ?>cursos">Cursos</a></li>
                                <li><a href="<?= $config['url_site'] ?>sobre">Sobre Nós</a></li>
                                <li><a href="<?= $config['url_site'] ?>noticias">Notícias</a></li>
                                <li><a href="<?= $config['url_site'] ?>contato">Contato</a></li>
                                <li><a href="<?= $config['url_site'] ?>estrutura">Estrutura</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget">
                            <h3>Receba nossas novidades!</h3>
                            <p>Promoções, Eventos, e muito mais do mundo <?= $config['sigla'] ?></p>
                            <form action="#" class="sa-form">
                                <input type="email" class="form-control" placeholder="seu e-mail aqui" required="">
                                <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
        </div><!-- /.container -->
    </div>
    <div class="footer-bottom">
        <div class="container text-center">
            <?php
            $data = date('Y');
            if($config['ies'] == 'ftm') {
                echo "<span>Copyright &copy; 2015 - $data Três Marias.</span>";
            } else {
                echo "<span>Copyright &copy; 2017 - $data EESAP. Todos os direitos reservados.</span>";
            }
            ?>
        </div><!-- /.container -->
    </div>
</div><!-- /.footer -->