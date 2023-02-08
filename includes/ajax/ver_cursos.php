<?php

include ("_config/db_connect.php");
include ("_config/functions.php");

?>


<?php
if (isset($_GET['area'])){
    if ($_GET['area'] == 'ead' or $_GET['area'] == 'ead-curta-duracao'){
        $urlApi = 'https://www.faculdadetresmarias.edu.br/api/getCourses.php';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $urlApi);
        curl_setopt($curl, CURLOPT_POSTFIELDS, array('level' => 2, 'modality' => 2, 'area' => $_GET['area']));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($curl);
        $json = json_decode($response);
        if ($json){
            echo "<div class=\"home-2\">";
            foreach ($json->courses as $course){
                echo "<h5><a class=\"nome_curso\" href=\"{$course->url}\" target='_blank'><i class=\"fa fa-plus-circle\"></i> {$course->name}</a></h5>";
            }
            echo "</div>";
        }else{
            echo 'Sistema indisponível no momento. Tente novamente mais tarde.';
        }
    }else{
        if (isset($_GET['level'])){
            $area = str_replace(array("'","\\"),"",$_GET['area']);
            $level = 2;#intval($_GET['level']);

            $consulta = $pdo->prepare("SELECT * FROM courses WHERE `kind` > 0 AND `level` = '$level' AND `area` = '$area' ORDER BY `kind` ASC;");
            if ($consulta->execute()) {
                $rowcount = $consulta->rowCount();
                ?>
                <div class="home-2">
                    <?php while($linha = $consulta->fetch()){

                        if ($linha['level'] == 2){
                            if ($linha['kind'] == 2){
                                $link_leva = "javascript:curso_indisponivel({$linha['id']});";
                                $link_text = "Indisponível";
                            }else{
                                $link_leva = $config['url_site']."cursos/";
                                if ($pdo->query("SELECT count(*) FROM courses WHERE kind > 0 AND area != 'deletado' AND slug = '{$linha['slug']}';")->fetchColumn() == 1){
                                    $link_leva .= $linha['slug'];
                                }else{
                                    $link_leva .= $linha['id'];
                                }

                                $link_text = "Leia mais";
                            }
                            ?>
                            <!--start course single  item -->
                            <h2><a class="nome_curso" href="<?=$link_leva?>"><i class="fa fa-plus-circle"></i> <?=$linha['name']?></a> <div id="curso_<?=$linha['id']?>" class="info_curso"></div> </h2>
                            <!--End course single  item -->
                        <?php } ?>
                    <?php } ?>
                </div>
                <?php
            }else{
                echo "error 404";
                die;
            }
        }else{
            echo "error 404";
            die;
        }
    }

}else{
    echo "error 404";
    die;
}
?>
