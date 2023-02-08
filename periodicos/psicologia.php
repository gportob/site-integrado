<style>

    .row {
        margin-right: 0px;
    }

</style>
<?php include('includes/capa-periodicos.php'); ?>
<?php

$text_f = "<div class='container'>
PSICOLOGIA REVISTA
https://revistas.pucsp.br/psicorevista

Revista Psico
https://revistaseletronicas.pucrs.br/ojs/index.php/revistapsico

PSICOLOGIA EM REVISTA
http://periodicos.pucminas.br/index.php/psicologiaemrevista 

REVISTA E-PSI
https://revistaepsi.com/

PSICOLOGIA EM ESTUDO
https://periodicos.uem.br/ojs/index.php/PsicolEstud

REVISTA PSICOLOGIA EM FOCO
http://revistas.fw.uri.br/index.php/psicologiaemfoco

MUDANÇAS PSICOLOGIA DA SAÚDE
https://www.metodista.br/revistas/revistas-ims/index.php/MUD

FENOMENOLOGIA E PSICOLOGIA
http://www.periodicoseletronicos.ufma.br/index.php/fenomenolpsicol/

PSICOLOGIA & SABERES
https://revistas.cesmac.edu.br/index.php/psicologia

REVISTA INTERNACIONAL DE PSICOLOGIA
https://www.revistapsicologia.org/index.php/revista

Revista Psicologia e Saúde em Debate
https://psicodebate.dpgpsifpm.com.br/index.php/periodico 

Revista de Psicologia: teoria e pesquisa
https://periodicos.unb.br/index.php/revistaptp

ACTA COMPORTAMENTALIA
http://www.revistas.unam.mx/index.php/acom/issue/archive 

ARQUIVOS BRASILEIROS DE PSICOLOGIA
http://pepsic.bvsalud.org/scielo.php?script=sci_serial&pid=1809-5267&lng=pt&nrm=iso 

ESTUDOS INTERDISCIPLINARES SOBRE O ENVELHECIMENTO
https://www.seer.ufrgs.br/index.php/RevEnvelhecer/index

FRACTAL
https://periodicos.uff.br/fractal/index

PSICOLOGIA: TEORIA E PRÁTICA
http://editorarevistas.mackenzie.br/index.php/ptp/index 

PSICOPERSPECTIVAS (VALPARAÍSO)
https://www.psicoperspectivas.cl/index.php/psicoperspectivas/issue/archive

Revista Brasileira de Terapias Cognitivas
http://pepsic.bvsalud.org/scielo.php?script=sci_serial&pid=1808-5687&lng=pt&nrm=iso

Revista TEMPO PSICANALÍTICO
http://pepsic.bvsalud.org/scielo.php?script=sci_serial&pid=0101-4838&lng=pt&nrm=iso


REVERSO: REVISTA DE PSICANÁLISE
http://pepsic.bvsalud.org/scielo.php?script=sci_serial&pid=0102-7395&lng=pt&nrm=iso
</div>
";

$texts = explode("\n\n", $text_f);
foreach ($texts as $text) {
    $parts = explode("\n", $text);
    echo "<p><a href=\"{$parts[1]}\" target=\"_blank\" rel=\"noopener noreferrer\">{$parts[0]}</a></p><hr>";
}
