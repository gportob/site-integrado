<style>

    .row {
        margin-right: 0px;
    }

</style>

<?php include('includes/capa-periodicos.php'); ?>
<?php

$text_f = "<div class='container'>
AMBIENTE CONSTRUÍDO
https://seer.ufrgs.br/index.php/ambienteconstruido/issue/archive

CIÊNCIA & TECNOLOGIA
https://www.metodista.br/revistas/revistas-unimep/index.php/cienciatecnologia/index

CONSTRUÇÃO METÁLICA
https://www.abcem.org.br/site/biblioteca-digital.php?tipo=revista-construcao-metalica

FUNDAÇÕES E OBRAS GEOTÉCNICAS
https://revistafundacoes.com.br/

REEC – REVISTA ELETRÔNICA DE ENGENHARIA CIVIL
https://revistas.ufg.br/index.php/reec/index

REVISTA DE ENGENHARIA
http://www.brasilengenharia.com/portal/revista/edicoes-anteriores

TECNO-LÓGICA
https://online.unisc.br/seer/index.php/tecnologica/index

TEORIA E PRÁTICA NA ENGENHARIA CIVIL
http://www.editoradunas.com.br/revistatpec/

REVISTA INGENIUM
https://www.ordemengenheiros.pt/pt/centro-de-informacao/publicacoes/revista-ingenium/

Acta scientiarum tecnology
https://periodicos.uem.br/ojs/index.php/ActaSciTechnol

Cadernos de engenharia de estruturas
http://cadernos.set.eesc.usp.br/issue/current

ENGENHARIA SANITÁRIA E AMBIENTAL
https://www.scielo.br/j/esa/

GESTÃO & TECNOLOGIA DE PROJETOS
https://www.revistas.usp.br/gestaodeprojetos

CONSTRUTORES
http://www.revistaconstrutores.com.br/
</div>";

$texts = explode("\n\n", $text_f);
foreach ($texts as $text) {
    $parts = explode("\n", $text);
    echo "<p><a href=\"{$parts[1]}\" target=\"_blank\" rel=\"noopener noreferrer\">{$parts[0]}</a></p><hr>";
}
