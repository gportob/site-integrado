<style>

    .row {
        margin-right: 0px;
    }

    h2 {
        margin: 0;
        color: #ffd22c;
        font-weight: bold;
        font-size: 60px;
    }


</style>
<?php include('includes/capa-periodicos.php'); ?>
<?php

$text_f = "<div class='container'>
Revista Eletrônica de Farmácia – REF
https://revistas.ufg.br/index.php/REF

Revista Latino-americana de Psicopatologia Fundamental
https://www.scielo.br/j/rlpf/grid

Revista Química Nova
https://www.scielo.br/j/qn/grid

Revista Brasileira de Farmácia Hospitalar e Serviços de Saúde
https://rbfhss.org.br/sbrafh

Jornal Brasileiro de Patologia e Medicina Laboratorial
https://www.scielo.br/j/jbpml/i/2021.v57/

O Farmacêutico em Revista
https://www.crf-pr.org.br/midia/revista?tipo=1

Revista de Saúde Pública – RSP
https://rsp.fsp.usp.br/

Revista Saúde em Debate
https://saudeemdebate.org.br/sed

Revista Pharmácia Brasileira
https://www.cff.org.br/revista.php?menu=0

Revista Farmácia Generalista
https://publicacoes.unifal-mg.edu.br/revistas/index.php/revistafarmaciageneralista

Infarma – Ciências Farmacêuticas
https://www.revistas.cff.org.br/?journal=infarma

REVISTA DE PATOLOGIA TROPICAL
https://revistas.ufg.br/iptsp/issue/archive

REVISTA BIOÉTICA
https://revistabioetica.cfm.org.br/index.php/revista_bioetica

REVISTA PHARMACIA BRASILEIRA
https://www.cff.org.br/revista.php

AMERICAN JOURNAL OF CLINICAL PATHOLOGY
https://academic.oup.com/ajcp

MOLECULAR PHARMACOLOGY
https://molpharm.aspetjournals.org/

PHARMACOLOGICAL REVIEWS
https://pharmrev.aspetjournals.org/

REVISTA BRASILEIRA DE FARMACOGNOSIA
http://www.sbfgnosia.org.br/revista/

Physis: Revista de Saúde Coletiva
https://www.scielo.br/j/physis/grid

Ciência & Saúde Coletiva
https://www.scielo.br/j/csc/grid

Cadernos de Saúde Pública
https://www.scielo.br/j/csp/grid

Revista chilena de anatomia
https://www.scielo.cl/scielo.php?script=sci_issues&pid=0716-9868&lng=pt&nrm=isso

Cadernos Saúde Coletiva
https://www.scielo.br/j/cadsc/grid
</div>";

$texts = explode("\r\n\r\n", $text_f);
foreach ($texts as $text) {
    $parts = explode("\r\n", $text);
    echo "<p><a href=\"{$parts[1]}\" target=\"_blank\" rel=\"noopener noreferrer\">{$parts[0]}</a></p><hr>";
}
