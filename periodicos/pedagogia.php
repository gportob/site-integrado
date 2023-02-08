<style>

    .row {
        margin-right: 0px;
    }

</style>
<?php include('includes/capa-periodicos.php'); ?>
<?php

$text_f = "<div class='container'>Educação & Realidade 
https://seer.ufrgs.br/index.php/educacaoerealidade/index

Cadernos de História da educação
http://www.seer.ufu.br/index.php/che/

Revista Brasileira de História da Educação
https://periodicos.uem.br/ojs/index.php/rbhe/index

Currículo sem fronteira
http://www.curriculosemfronteiras.org/index.htm

Educação e filosofia
http://www.seer.ufu.br/index.php/EducacaoFilosofia/index
Práxis educativa
https://revistas2.uepg.br/index.php/praxiseducativa/index

Revista Educação
https://revistaseletronicas.pucrs.br/ojs/index.php/faced/index

Educação matemática pesquisa
https://revistas.pucsp.br/index.php/emp/

Cadernos da Pedagogia UFSCAR
http://www.cadernosdapedagogia.ufscar.br/index.php/cp

Educação em Revista
https://www.scielo.br/j/edur/

Revista Brasileira de Educação
https://www.scielo.br/j/rbedu/

Revista de Educação PUC- Campinas
https://periodicos.puc-campinas.edu.br/seer/index.php/reveducacao

Revista de Educação PUC- RS
https://revistaseletronicas.pucrs.br/ojs/index.php/faced

 Revista Educação e Pesquisa- USP
http://www.educacaoepesquisa.fe.usp.br/

Revista Educação: teoria e prática
https://www.periodicos.rc.biblioteca.unesp.br/index.php/educacao/index

Ensaio: Avaliação e Políticas Públicas em Educação
https://www.scielo.br/j/ensaio/

Revista Linguagem em discurso
https://www.scielo.br/j/ld/

Revista Lusófona de Educação
https://revistas.ulusofona.pt/index.php/rleducacao

Revista Psicopedagogia
http://pepsic.bvsalud.org/scielo.php?script=sci_serial&pid=0103-8486&lng=pt&nrm=iso

Cadernos de Pesquisa em Educação
https://periodicos.ufes.br/index.php/educacao/index

Educação & Realidade
https://www.scielo.br/j/edreal/

Educação & Sociedade
https://www.scielo.br/j/es/

Pro- Posições
https://www.scielo.br/j/pp/

Revista de Ciências da Educação
http://revista.unisal.br/ojs/index.php/educacao/index

Revista Brasileira de Estudos Pedagógicos – RBEP
https://www.scielo.br/j/rbeped/

Psicologia Escolar e Educacional
https://www.scielo.br/j/pee/

Ciência e Cultura
http://cienciaecultura.bvs.br/scielo.php?script=sci_serial&pid=0009-6725&lng=pt&nrm=iso

Revista de Estudos da Linguagem
http://periodicos.letras.ufmg.br/index.php/relin

Revista: Estudos de Literatura Brasileira Contemporânea
https://periodicos.unb.br/index.php/estudos/

Revista: Cadernos de Estudos Linguísticos (UNICAMP)
https://periodicos.sbu.unicamp.br/ojs/index.php/cel

Revista Educação Especial
https://periodicos.ufsm.br/educacaoespecial
</div>
";

$texts = explode("\r\n\r\n", $text_f);
foreach ($texts as $text) {
    $parts = explode("\r\n", $text);
    echo "<p><a href=\"{$parts[1]}\" target=\"_blank\" rel=\"noopener noreferrer\">{$parts[0]}</a></p><hr>";
}
