<style>

    .row {
        margin-right: 0px;
    }


</style>
<?php include('includes/capa-periodicos.php'); ?>
<?php

$text_f = "<div class='container'>
Organizações & Sociedade – O&S
https://periodicos.ufba.br/index.php/revistaoes

Revista de Ciências da Administração – RCA
https://periodicos.ufsc.br/index.php/adm

Revista Eletrônica de Administração
https://seer.ufrgs.br/index.php/read/issue/view/4662

Revista Brasileira de Marketing
https://periodicos.uninove.br/remark

Revista Gestão e Tecnologia
http://revistagt.fpl.edu.br/get/issue/view/83

Caderno de Pesquisas em Administração
https://revistas.pucsp.br/caadm

BASE – Revista de Administração e Contabilidade
  https://revistas.unisinos.br/index.php/base/index

Organizações Rurais & Agroindustriais Revista de Administração da UFLA 
http://revista.dae.ufla.br/index.php/ora

RAP – Revista de Administração Pública
https://bibliotecadigital.fgv.br/ojs/index.php/rap

Revista de Administração da UFSM 
https://periodicos.ufsm.br/index.php/reaufsm

ReAd – Revista Eletrônica de Administração da UFRGS 
https://seer.ufrgs.br/read

ReAT – Revista Eletrônica de Administração e Turismo 
https://periodicos.ufpel.edu.br/ojs2/index.php/AT

Revista de administração e inovação
https://www.revistas.usp.br/rai

Revista de administração –RAF
http://publicacoes.fatea.br/index.php/raf

Revista CMC
http://revistacmc.espm.br/index.php/revistacmc/index

Revista gestão organizacional
https://bell.unochapeco.edu.br/revistas/index.php/rgo

Revista perspectivas em análise do comportamento
https://www.revistaperspectivas.org/perspectivas

Revista contextus
http://periodicos.ufc.br/contextus

Revista pesquisa e debate
https://revistas.pucsp.br/index.php/rpe

Revista da Administração, Sociedade e Inovação –RASI
https://www.rasi.vr.uff.br/index.php/rasi

Revista Brasileira de Pesquisas de Marketing, Opinião e Mídia
https://revistapmkt.com.br/pt_br/

Revista Eletrônica de Negócios Internacionais (Internext)
https://internext.espm.br/internext/index

Revista Extraprensa
https://www.revistas.usp.br/extraprensa

Revista interdisciplinar de Marketing
https://periodicos.uem.br/ojs/index.php/rimar

Revista de Administração
https://www.revistas.usp.br/rausp

Revista de Ciências da Administração
https://periodicos.ufsc.br/index.php/adm

Revista de Administração FACES Journal
http://revista.fumec.br/index.php/facesp/index

Sistemas & Gestão
https://www.revistasg.uff.br/sg

Estudo & Debate em Gestão & Planejamento
http://www.univates.br/revistas/index.php/estudoedebate/index
</div>";

$texts = explode("\r\n\r\n", $text_f);
foreach ($texts as $text) {
    $parts = explode("\r\n", $text);
    echo "<p><a href=\"{$parts[1]}\" target=\"_blank\" rel=\"noopener noreferrer\">{$parts[0]}</a></p><hr>";
}
