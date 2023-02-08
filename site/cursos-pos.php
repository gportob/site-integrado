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

<section class="breadcrumb-section" style="background-image: url('https://i.imgur.com/qoiuaUU.png')">
    <div class="container">
        <h1>Pós-Graduação</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../_lixo/index.html">Início</a></li>
            <li class="breadcrumb-item">Cursos</li>
        </ol>
    </div><!-- /.container -->
</section><!-- /.breadcrumb-section -->


<div class="sg-page-content">
    <div class="sg-section">
        <div class="section-content sg-filter-content grid-view-tab section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>A formação acadêmica é um grande diferencial para as pessoas que buscam destaque no mercado de
                            trabalho
                            atual, por isso, após adquirir um diploma universitário, uma forma de especialização na carreira
                            escolhida pode ser a pós-graduação, tanto em latu como strictu senso.</p>
                        <p>Além disso, os cursos de especialização agregam valor à formação e estreitam o relacionamento com
                            outros
                            profissionais, o que facilita a aquisição de novas posições no mercado de trabalho. Neste sentido a
                            EESAP traz uma proposta arrojada para seu curso de Pós-Graduação.</p>
                        <p>Aulas dinâmicas e por estudos de casos reais, com professores de mercado com vasta experiência
                            profissional.</p>
                        <p>Nossos programas de cursos de Pós–Graduação são elaborados para unir o conhecimento a prática do
                            mercado,
                            embasando nosso aluno para enfrentar desafios em sua carreira.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="https://img.freepik.com/fotos-gratis/silhueta-de-empresarios-confiantes_1098-1768.jpg?w=740&t=st=1675796928~exp=1675797528~hmac=fc190e6967b2123bdf155139f66978d6b60aeba0ff3050cf0d8a696ea11ecbd3">
                    </div>
                </div>
                
                <div class="col-md-12 courses_area" style="margin-bottom: 15px;">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="title">
                                <h3 class="module-title">
                                    Veja nossos cursos por <span>Área</span>
                                </h3>
                            </div>
                        </div>
                        <div id="areas">
                            <div class="col-xs-12 col-md-12" style="margin-bottom: 15px;">
                                <div class="row">
                                    <div class="share-container">
                                        <?php
                                        $areas = array(
                                            0 => array(
                                                "fa" => "fa-graduation-cap",
                                                "slug" => "educacao",
                                                "name" => "Educação"
                                            ),

                                            1 => array(

                                                "fa" => "fa-hospital-o",
                                                "slug" => "saude",
                                                "name" => "Saúde"
                                            ),

                                            2 => array(
                                                "fa" => "fa-line-chart",
                                                "slug" => "negocios",
                                                "name" => "Negócios"
                                            ),

                                            3 => array(
                                                "fa" => "",
                                                "slug" => "engenharia",
                                                "name" => "Engenharia"
                                            ),

                                            4 => array(
                                                "fa" => "",
                                                "slug" => "meio",
                                                "name" => "Meio Ambiente"
                                            ),

                                            5 => array(
                                                "fa" => "fa-balance-scale",
                                                "slug" => "direito",
                                                "name" => "Direito"
                                            ),

                                            6 => array(
                                                "fa" => "",
                                                "slug" => "ead-curta-duracao",
                                                "name" => "EAD Curta Duração",
                                                "img" => 'https://i.imgur.com/6S7iHYk.png'
                                            ),

                                            7 => array(
                                                "fa" => "",
                                                "slug" => "ead",
                                                "name" => "EAD",
                                                "img" => 'https://i.imgur.com/M57n4YH.png'
                                            )
                                        );
                                        foreach ($areas as $area){
                                            if (isset($area['img'])){
                                                $img = $area['img'];
                                            }else{
                                                $img = "{$config['storage']['web']}pos/assets/img/icons/areas/{$area['slug']}.png?nocahce=1";
                                            }
                                            ?>
                                            <!-- single item brand -->
                                            <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12" style="padding-bottom: 25px;">
                                                <div class="brand_content content_left_fb">
                                                    <!--a href="<?=$link_web?>pos/<?=$area['slug']?>"-->
                                                    <a id="button_<?=$area['slug']?>" class="click_area" href="javascript:load_cursos('<?=$area['slug']?>');">
                                                        <!--i class="fa <?=$area['fa']?>" style="top: 10px;"></i>
                                    <div class="icone_text" style="margin-left: 33%;">
                                        <h3 style="color: #fff;font-family: Helvetica,Arial,sans-serif;"><?=$area['name']?></h3>
                                    </div-->
                                                        <img src="<?=$img?>"/>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end single item brand -->
                                            <div id="<?=$area['slug']?>" style="margin-bottom: 30px; padding-left: 85px;">

                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="cursos">

                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </div><!-- /.section-content -->
    </div><!-- /.sg-section -->
</div><!-- /.sg-page-content -->



<?php include(__DIR__ . '/includes/opiniao-alunos.php'); ?>
<?php include(__DIR__ . '/includes/redes-sociais.php'); ?>
<?php include(__DIR__ . '/includes/footer.php'); ?>

<script>

    function unload_cursos(){
        <?php foreach($areas as $area){ ?>
        $("#<?=$area['slug']?>").html('');
        document.getElementById('button_<?=$area['slug']?>').classList.remove("active_course");
        <?php } ?>
    }
    function load_cursos(area){
        var level = 2;
        $("#"+area).load("<?=$config['url_site']?>includes/ajax/ver_cursos.php?level="+level+"&area="+area+"#content");
        unload_cursos();
        document.getElementById('button_'+area).classList.add("active_course");
    }

    function curso_indisponivel(id_curso){
        $("#curso_"+id_curso).html('Curso indisponível no momento. Ligue 0800 083 2656 para mais informações.');

    }

    function loop_slider(){
        document.getElementsByClassName("nivo-nextNav")[0].click();
        setTimeout(function() { loop_slider(); }, 4000);
    }

    $( document ).ready(function() {
        loop_slider();
    });
</script>
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